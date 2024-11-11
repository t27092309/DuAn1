<?php
class ProductQuery
{
    public $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost; port=3306; dbname=duan1", "root", "");
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

    //---------------------------------------------------------All()----------------------------------------------
    public function all()
    {
        try {
            $sql = "SELECT * FROM product";
            $data = $this->pdo->query($sql)->fetchAll();

            foreach ($data as $value) {
                $product = new Product();
                $product->id_product = $value['id_product'];
                $product->title_product = $value['title_product'];
                $product->img_product = $value['img_product'];
                $product->price_product = $value['price_product'];
                $product->description_product = $value['description_product'];
                $product->id_category = $value['id_category'];

                $list[] = $product;
            }
            return $list;
        } catch (Exception $error) {
            echo "Get all product error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    //---------------------------------------------------------Find()----------------------------------------------
    public function find($id_product)
    {
        try {
            $sql = "SELECT * FROM product WHERE id_product = $id_product";
            $data = $this->pdo->query($sql)->fetch();

            if ($data !== false) {
                $product = new Product();
                $product->id_product = $data['id_product'];
                $product->title_product = $data['title_product'];
                $product->img_product = $data['img_product'];
                $product->price_product = $data['price_product'];
                $product->description_product = $data['description_product'];
                $product->id_category = $data['id_category'];
                return $product;
            }
        } catch (Exception $error) {
            echo "Get product error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    //---------------------------------------------------------Insert()----------------------------------------------
    public function insert(Product $product)
    {
        try {
            $sql = "INSERT INTO product(title_product, img_product, price_product, description_product, id_category) VALUES('".$product->title_product."', '".$product->img_product."', '".$product->price_product."', '".$product->description_product."', '".$product->id_category."')";
            $data = $this->pdo->exec($sql);

            if($data === 1){
                return "success";
            }
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
}
