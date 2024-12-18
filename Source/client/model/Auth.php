<?php
class Auth
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
    //---------------------------------------------------------Home()-----------------------------------------------

    //---------------------------------------------------------All()----------------------------------------------

    //---------------------------------------------------------Find()----------------------------------------------

    //----------------------------------------------------------Detail()---------------------------------------------------
  
    //---------------------------------------------------------Insert()----------------------------------------------
    public function setInfoAccount($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
    }
    public function insertAccount()
    {
        try {
            $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (username, email, password) VALUES ('{$this->name}', '{$this->email}', '{$hashedPassword}')";

            return $this->pdo->exec($sql);
        } catch (Exception $error) {
            echo "Insert error<br>";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    public function getInfoAccount($email)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = '" . $email . "'";
            return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            echo "Detail product error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    public function getProfile($id)
    {
        try {
            $sql = "SELECT * FROM users WHERE id = '" . $id . "'";
            return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            echo "Detail product error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    public function updateProfile($data)
    {
        try {
            $sql = "UPDATE users SET username = '".$data['name']."', phone = '".$data['phone']."', email = '".$data['email']."', address = '".$data['address']."', description = '".$data['description']."' WHERE id = ".$data['id'];
            return $this->pdo->exec($sql);
        } catch (Exception $error) {
            echo "Detail product error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    public function updatePass($data)
    {
        $hashedPassword = password_hash($data['password_new'], PASSWORD_BCRYPT);
        try {
            $sql = "UPDATE users SET password = '".$hashedPassword."' WHERE id = ".$data['id'];
            return $this->pdo->exec($sql);
        } catch (Exception $error) {
            echo "Detail product error";
            echo "Error: " . $error->getMessage();
            echo "<hr>";
        }
    }

    public function handleLogin($account, $data)
    {
        $email = $data['email'];
        $password = $data['password'];

        $user = $this->getInfoAccount($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                return $user;
            } else {
                echo "Mật khẩu không đúng!";
            }
        } else {
            echo "Email không tồn tại!";
        }
    }

    //---------------------------------------------------------Update()----------------------------------------------
  
    //---------------------------------------------------------Delete()----------------------------------------------
   
    //---------------------------------------------------------Search()----------------------------------------------
   
}
