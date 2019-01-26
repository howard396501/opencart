<?php
class ControllerExtensionPaymentEcpaypayment extends Controller {
    private $module_name = 'ecpaypayment';
    private $lang_prefix = '';
    private $module_path = '';
    private $id_prefix = '';
    private $setting_prefix = '';
    private $model_name = '';
    private $chosen_payment_session_name = 'chosen_payment';
    private $helper = null;
    private $ecpay_invoice_module_name = 'ecpayinvoice';
    private $ecpay_invoice_setting_prefix = '';
    private $opay_invoice_module_name = 'opayinvoice';
    private $opay_invoice_setting_prefix = '';

    // Constructor
    public function __construct($registry) {
        parent::__construct($registry);

        // Set the variables
        $this->lang_prefix = $this->module_name .'_';
        $this->id_prefix = 'payment-' . $this->module_name;
        $this->setting_prefix = 'payment_' . $this->module_name . '_';
        $this->module_path = 'extension/payment/' . $this->module_name;
        $this->model_name = 'model_extension_payment_' . $this->module_name;
        $this->load->model($this->module_path);
        $this->{$this->model_name}->loadLibrary();
        $this->helper = $this->{$this->model_name}->getHelper();


        $this->ecpay_invoice_setting_prefix = 'payment_' . $this->ecpay_invoice_module_name . '_';
        $this->opay_invoice_setting_prefix = 'payment_' . $this->opay_invoice_module_name . '_';
    }

    // Checkout confirm order page
    public function index() {
        // Get the translations
        $this->load->language($this->module_path);
        $data['text_checkout_button'] = $this->language->get($this->lang_prefix . 'text_checkout_button');
        $data['text_title'] = $this->language->get($this->lang_prefix . 'text_title');
        $data['entry_payment_method'] = $this->language->get($this->lang_prefix . 'entry_payment_method');
        if (isset($this->session->data[$this->module_name][$this->chosen_payment_session_name]) === true) {
            $chosen_payment = $this->session->data[$this->module_name][$this->chosen_payment_session_name];
            $data['chosen_payemnt'] = $this->language->get($this->lang_prefix . 'text_' . $chosen_payment);
        } else {
            $data['chosen_payemnt'] = '';
        }

        // Set the view data
        $data['id_prefix'] = $this->id_prefix;
        $data['redirect_url'] = $this->url->link(
            $this->module_path . '/redirect',
            '',
            $this->url_secure
        );

        // Load the template
        $view_path = $this->module_path;
        return $this->load->view($this->module_path, $data);
    }

    // Ajax API to save chosen payment
    public function savePayment() {
        $function_name = __FUNCTION__;
        $white_list = array('cp');
        $inputs = $this->helper->only($_POST, $white_list);

        // Check the received variables
        if ($inputs === false) {
            $this->helper->echoJson(array('response' => $function_name . ' failed(1)'));
        }

        // Save chosen payment
        $this->session->data[$this->module_name][$this->chosen_payment_session_name] = $inputs['cp'];

        $this->helper->echoJson(array('response' => 'ok'));
    }

    // Ajax API to clean ECPay session
    public function cleanSession() {
        if (isset($this->session->data[$this->module_name][$this->chosen_payment_session_name]) === true) {
            unset($this->session->data[$this->module_name][$this->chosen_payment_session_name]);
        }

        $this->helper->echoJson(array('response' => 'ok'));
    }

    // Redirect to AIO
    public function redirect() {
        try {
            // Load translation
            $this->load->language($this->module_path);

            $payment_methods = $this->config->get($this->setting_prefix . 'payment_methods');

            // Check choose payment
            if (isset($this->session->data[$this->module_name][$this->chosen_payment_session_name]) === false) {
                throw new Exception($this->language->get($this->setting_prefix . 'error_payment_missing'));
            }
            $choose_payment = $this->session->data[$this->module_name][$this->chosen_payment_session_name];

            // Validate choose payment
            if (in_array($choose_payment, $payment_methods) === false) {
                throw new Exception($this->language->get($this->lang_prefix . 'error_invalid_payment'));
            }

            // Validate the order id
            if (isset($this->session->data['order_id']) === false) {
                throw new Exception($this->language->get($this->lang_prefix . 'error_order_id_miss'));
            }
            $order_id = $this->session->data['order_id'];

            // Get the order info
            $this->load->model('checkout/order');
            $order = $this->model_checkout_order->getOrder($order_id);
            $order_total = $order['total'];

            // Update order status and comments
            $comment = $this->language->get($this->lang_prefix . 'text_' . $choose_payment);
            $status_id = $this->config->get($this->setting_prefix . 'create_status');
            $this->model_checkout_order->addOrderHistory($order_id, $status_id, $comment, true, false);

            // Clear the cart
            $this->cart->clear();

            // Add to activity log
            $this->load->model('account/activity');
            if (empty($this->customer->isLogged()) === false) {
                $activity_key = 'order_account';
                $activity_data = array(
                    'customer_id' => $this->customer->getId(),
                    'name'        => $this->customer->getFirstName() . ' ' . $this->customer->getLastName(),
                    'order_id'    => $order_id
                );
            } else {
                $activity_key = 'order_guest';
                $guest = $this->session->data['guest'];
                $activity_data = array(
                    'name'     => $guest['firstname'] . ' ' . $guest['lastname'],
                    'order_id' => $order_id
                );
            }
            $this->model_account_activity->addActivity($activity_key, $activity_data);

            // Clean the session
            $session_list = array(
                'shipping_method',
                'shipping_methods',
                'payment_method',
                'payment_methods',
                'guest',
                'comment',
                'order_id',
                'coupon',
                'reward',
                'voucher',
                'vouchers',
                'totals',
                'error',
            );
            foreach ($session_list as $name) {
                unset($this->session->data[$name]);
            }

            // Checkout
            $helper_data = array(
                'choosePayment' => $choose_payment,
                'hashKey' => $this->config->get($this->setting_prefix . 'hash_key'),
                'hashIv' => $this->config->get($this->setting_prefix . 'hash_iv'),
                'returnUrl' => $this->url->link($this->module_path . '/response', '', true),
                'clientBackUrl' =>$this->url->link('account/order/info', 'order_id=' . $order_id, true),
                'orderId' => $order_id,
                'total' => $order_total,
                'itemName' => $this->language->get($this->lang_prefix . 'text_item_name'),
                'cartName' => 'opencart',
                'currency' => $this->config->get('config_currency'),
                'needExtraPaidInfo' => 'Y',
            );
            $this->helper->checkout($helper_data);
        } catch (Exception $e) {
            // Process the exception
            $this->session->data['error'] = $e->getMessage();
            $this->response->redirect($this->url->link('checkout/checkout', '', $this->url_secure));
        }
    }

    // Process AIO response
    public function response() {
        // Load the model and translation
        $this->load->language($this->module_path);
        $this->load->model('checkout/order');

        // Set the default result message
        $result_message = '1|OK';
        $order_id = null;
        $order = null;
        try {
            // Get valid feedback
            $helper_data = array(
                'hashKey' => $this->config->get($this->setting_prefix . 'hash_key'),
                'hashIv' => $this->config->get($this->setting_prefix . 'hash_iv'),
            );
            $feedback = $this->helper->getValidFeedback($helper_data);
            unset($helper_data);

            $order_id = $this->helper->getOrderId($feedback['MerchantTradeNo']);

            // Get the cart order info
            $order = $this->model_checkout_order->getOrder($order_id);
            $order_status_id = $order['order_status_id'];
            $create_status_id = $this->config->get($this->setting_prefix . 'create_status');
            $order_total = $order['total'];

            // Check the amounts
            if (!$this->helper->validAmount($feedback['TradeAmt'], $order_total)) {
                throw new Exception($this->helper->getAmountError($order_id));
            }

            // Get the response state
            $helper_data = array(
                'validState' => ($this->helper->toInt($order_status_id) === $this->helper->toInt($create_status_id)),
                'orderId' => $order_id,
            );
            $response_state = $this->helper->getResponseState($feedback, $helper_data);
            unset($helper_data);

            // Update the order status
            switch($response_state) {
                // Paid
                case 1:
                    $status_id = $this->config->get($this->setting_prefix . 'success_status');
                    $pattern = $this->language->get($this->lang_prefix . 'text_payment_result_comment');
                    $comment = $this->helper->getPaymentSuccessComment($pattern, $feedback);
                    $this->model_checkout_order->addOrderHistory($order_id, $status_id, $comment, true, false);
                    unset($status_id, $pattern, $comment);

                    // Save AIO response
                    $result = $this->{$this->model_name}->saveResponse($order_id, $feedback);

                    // Check E-Invoice model
                    $opay_invoice_status = $this->config->get($this->opay_invoice_setting_prefix . 'status');
                    $ecpay_invoice_status = $this->config->get($this->ecpay_invoice_setting_prefix . 'status');

                    // Get E-Invoice model name
                    $invoice_module_name = '';
                    $invoice_setting_prefix = '';
                    if ($opay_invoice_status === '1' and is_null($ecpay_invoice_status) === true) {
                        $invoice_module_name = $this->opay_invoice_module_name;
                        $invoice_setting_prefix = $this->opay_invoice_setting_prefix;
                    }
                    if ($ecpay_invoice_status === '1' and is_null($opay_invoice_status) === true) {
                        $invoice_module_name = $this->ecpay_invoice_module_name;
                        $invoice_setting_prefix = $this->ecpay_invoice_setting_prefix;
                    }

                    // E-Invoice auto issuel
                    if ($invoice_module_name !== '') {
                        // 載入電子發票 Model
                        $invoice_model_name = 'model_extension_payment_' . $invoice_module_name;
                        $invoice_module_path = 'extension/payment/' . $invoice_module_name;
                        $this->load->model($invoice_module_path);

                        // 取得自動開立設定值
                        $invoice_autoissue = $this->config->get($invoice_setting_prefix . 'autoissue');

                        if($invoice_autoissue === '1') {
                            $this->{$invoice_model_name}->createInvoiceNo($order_id);
                        }
                    }
                    break;

                // Get code 2:ATM 3:CVS 4:BARCODE
                case 2:
                case 3:
                case 4:
                    $status_id = $order_status_id;
                    $payment_type = $this->helper->getFeedbackPaymentType($feedback['PaymentType']);
                    $pattern = $this->language->get($this->lang_prefix . 'text_' . $payment_type . '_comment');
                    $comment = $this->helper->getObtainingCodeComment($pattern, $feedback);
                    $this->model_checkout_order->addOrderHistory($order_id, $status_id, $comment, true, false);
                    unset($status_id, $pattern, $comment);
                    break;

                // State error
                case 5:
                    if ($this->{$this->model_name}->isResponsed($order_id) === false) {
                        // Update payment result
                        $status_id = $order_status_id;
                        $pattern = $this->language->get($this->lang_prefix . 'text_payment_result_comment');
                        $comment = $this->helper->getPaymentSuccessComment($pattern, $feedback);
                        $this->model_checkout_order->addOrderHistory($order_id, $status_id, $comment, true, false);

                        // Save AIO response
                        $result = $this->{$this->model_name}->saveResponse($order_id, $feedback);

//                        // Update state error note
//                        $comment = $this->language->get($this->lang_prefix . 'text_state_error');
//                        $this->model_checkout_order->addOrderHistory($order_id, $status_id, $comment, true, false);
//                        unset($status_id, $pattern, $comment);
                    }
                    break;

                // Simulate paid
                case 6:
                    $status_id = $order_status_id;
                    $comment = $this->language->get($this->lang_prefix . 'text_simulate_paid');
                    $this->model_checkout_order->addOrderHistory($order_id, $status_id, $comment, false, false);
                    unset($status_id, $comment);
                    break;

                default:
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
            if (!is_null($order_id)) {
                $status_id = $this->config->get($this->setting_prefix . 'failed_status');
                $pattern = $this->language->get($this->lang_prefix . 'text_failure_comment');
                $comment = $this->helper->getFailedComment($pattern, $error);
                $this->model_checkout_order->addOrderHistory($order_id, $status_id, $comment, true, false);

                unset($status_id, $pattern, $comment);
            }

            // Set the failure result
            $result_message = '0|' . $error;
        }

        $this->helper->echoAndExit($result_message);
    }
}
?>
