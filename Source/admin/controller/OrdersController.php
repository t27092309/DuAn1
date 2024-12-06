<?php
class OrderController{
    public $productQuery;

    public function __construct()
    {
        $this->productQuery = new ProductQuery();
    }
    public function __destruct() {}
    
    public function calRevenue(){
        $orderQuery = new OrderQuery();
        $totalRevenue = $orderQuery->totalRevenue();
        include 'view/revenue.php';
    }
}
?>