<?php
class Order {

    public $id_order;
    public $user_id;
    public $total_amount;
    public $order_date;
    public $status;
    public $name;
    public $address;
    public $phone;
    public $payment_method;

    public function __construct()
    {
        
    }

    public function __destruct()
    {
        
    }

}
