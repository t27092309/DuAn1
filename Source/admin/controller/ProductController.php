<?php
class ProductController{
    public $productQuery;

    public function __construct()
    {
        $this->productQuery = new ProductQuery();
    }
    public function __destruct()
    {
        
    }

    public function showList(){

        $productList = $this->productQuery->all();
        include "view/product/list.php";
    }

    public function showCreate(){


        include "view/product/create.php";
    }

    public function showDetail(){


        include "view/product/detail.php";
    }

    public function showUpdate(){


        include "view/product/update.php";
    }
}

















?>