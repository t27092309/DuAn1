<?php
class ProductQuery
{
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost; port=3306; dbname=web2014_demo_mvc_database01", "root", "");
            echo "Connect database successfully";
            echo "<hr>";
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

    //---------------------------------------------------------Insert()----------------------------------------------
    public function insert(Product $product)
    {
        try {
            $sql = "";
            $data = "";
        } catch (Exception $error) {
            echo "Insert error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    //---------------------------------------------------------Update()----------------------------------------------
    public function update($id, Product $product)
    {
        try {
            $sql = "";
            $data = "";
        } catch (Exception $error) {
            echo "Insert error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }
    //---------------------------------------------------------Delete()----------------------------------------------
    public function delete($id)
    {
        try {
            $sql = "";
            $data = "";
        } catch (Exception $error) {
            echo "Insert error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }
    //---------------------------------------------------------Find()----------------------------------------------
    public function find($id)
    {
        try {
            $sql = "";
            $data = "";
        } catch (Exception $error) {
            echo "Insert error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }
    //---------------------------------------------------------All()----------------------------------------------
    public function all()
    {
        try {
            $sql = "";
            $data = "";
        } catch (Exception $error) {
            echo "Insert error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

}
