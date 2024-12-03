<?php
class CategoryQuery
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

    //---------------------------------------------------------All()-----------------------------------------------
    public function CategoryAll()
    {
        try {
            $sql = "SELECT * FROM category";
            $data = $this->pdo->query($sql)->fetchAll();

            foreach ($data as $value) {
                $category = new Category();
                $category->id_category = $value['id_category'];
                $category->title_category = $value['title_category'];
                $category->img_category = $value['img_category'];

                $cateList[] = $category;
            }
            return $cateList;
        } catch (Exception $error) {
            echo "Get all category error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    //----------------------------------------------------------Detail()---------------------------------------------------
    public function detailCategory($id_category)
    {
        try {
            $sql = "SELECT * FROM category WHERE id_category = $id_category";
            $data = $this->pdo->query($sql)->fetch();

            if ($data !== false) {
                $category = new Category();
                $category->id_category = $data['id_category'];
                $category->title_category = $data['title_category'];
                $category->img_category = $data['img_category'];

                return $category;
            }
        } catch (Exception $error) {
            echo "Detail category error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }


    //---------------------------------------------------------Insert()-------------------------------------------------
    public function insertCategory(Category $category)
    {
        try {
            $sql = "INSERT INTO category(title_category,img_category) VALUES('" . $category->title_category . "', '" . $category->img_category . "')";
            $data = $this->pdo->exec($sql);
            if ($data === 1) {
                return "success";
            }
        } catch (Exception $error) {
            echo "Insert error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    //---------------------------------------------------------Update()----------------------------------------------
    public function updateCategory($id_category, Category $category)
    {
        try {
            $sql = "UPDATE category SET title_category = '" . $category->title_category . "', img_product = '" . $category->img_category . "'   WHERE id_product = $id_category";
            $data = $this->pdo->exec($sql);

            if ($data === 1 || $data === 0) {
                return "success";
            }
        } catch (Exception $error) {
            echo "Update error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    //---------------------------------------------------------Delete()----------------------------------------------
    public function deleteCategory($id_category)
    {
        try {
            $sql = "DELETE FROM category WHERE id_category = $id_category ";
            $data = $this->pdo->exec($sql);

            if ($data === 1) {
                return "success";
            }
        } catch (Exception $error) {
            echo "Delete error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }
}
