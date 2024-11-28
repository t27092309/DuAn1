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
            $sql = "SELECT * FROM category";
            $data = $this->pdo->query($sql)->fetchAll();

            foreach ($data as $value) {
                $category = new Product();
                $category->id_product = $value['id_product'];
                $category->title_product = $value['title_product'];
                $category->img_product = $value['img_product'];
                $category->price_product = $value['price_product'];
                $category->description_product = $value['description_product'];
                $category->id_category = $value['id_category'];
                $category->author_product = $value['author_product'];

                $list[] = $category;
            }
            return $list;
        } catch (Exception $error) {
            echo "Get all category error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    //---------------------------------------------------------Find()----------------------------------------------
    public function find($id_product)
    {
        try {
            $sql = "SELECT * FROM category WHERE id_product = $id_product";
            $data = $this->pdo->query($sql)->fetch();

            if ($data !== false) {
                $category = new Product();
                $category->id_product = $data['id_product'];
                $category->title_product = $data['title_product'];
                $category->img_product = $data['img_product'];
                $category->price_product = $data['price_product'];
                $category->description_product = $data['description_product'];
                $category->id_category = $data['id_category'];
                $category->author_product = $data['author_product'];
                return $category;
            }
        } catch (Exception $error) {
            echo "Get category error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    //---------------------------------------------------------Insert()----------------------------------------------
    public function insert(Product $category)
    {
        try {
            $sql = "INSERT INTO category(title_product, img_product, price_product, description_product, id_category, author_product) VALUES('".$category->title_product."', '".$category->img_product."', '".$category->price_product."', '".$category->description_product."', '".$category->id_category."', '".$category->author_product."')";
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
    public function update($id_product, Product $category)
    {
        try {
            $sql = "UPDATE category SET title_product = '".$category->title_product."', img_product = '".$category->img_product."', price_product = '".$category->price_product."', description_product = '".$category->description_product."', id_category = '".$category->id_category."', author_product = '".$category->author_product."' WHERE id_product = $id_product";
            $data = $this->pdo->exec($sql);

            if($data === 1 || $data === 0){
                return "success";
            }
        } catch (Exception $error) {
            echo "Update error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }
    //---------------------------------------------------------Delete()----------------------------------------------
    public function delete($id_product)
    {
        try {
            $sql = "DELETE FROM category WHERE id_product = $id_product ";
            $data = $this->pdo->exec($sql);

            if($data === 1 ){
                return "success";
            }
        } catch (Exception $error) {
            echo "Delete error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }
}
