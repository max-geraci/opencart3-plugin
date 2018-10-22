<?php
$dir = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ModelExtensionPaymentPaynlPaysafecard extends Pay_Model
{
    protected $_paymentOptionId = 553;
    protected $_paymentMethodName = 'paynl_paysafecard';
}