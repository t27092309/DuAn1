<?php
class OrderQuery
{
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost; port=3306; dbname=duan1", "root", "");
            // echo "Connect database successfully";
            // echo "<hr>";
        } catch (Exception $error) {
            echo "Connect database failed";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    public function totalRevenue(){
        try{
            $totalPrice = '';
            $sql = "SELECT SUM(total_amount) FROM orders";
            $data = $this->pdo->exec($sql);

            $totalPrice = $data;
        } catch (Exception $error) {
            echo "Total revenue error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }
}
