<?php
    require_once('Payment.php');
    class PaymentCash extends Payment{
        public $id;

        public function __construct ($id){
            parent:: __construct($id);
        }
    }
?>