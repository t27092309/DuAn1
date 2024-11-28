<?php


// function insert_taikhoan($user, $email, $pass)
// {
//     $sql = "insert into taikhoan(user,email,pass) values('$user','$email','$pass')";
//     pdo_execute($sql);
// }
// function loadall_taikhoan()
// {
//     $sql = "select *  from  taikhoan order by id desc";
//     $listtaikhoan = pdo_query($sql);
//     return $listtaikhoan;
// }
// function checkuser($user, $pass)
// {
//     $sql = "select * from taikhoan where user='" . $user . "' AND pass='" . $pass . "'";
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
// function checkemail($email)
// {
//     $sql = "select * from taikhoan where  email='" . $email . "'";
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
// function update_taikhoan($id, $email, $user, $pass, $address)
// {
//     $sql = "update taikhoan set email='" . $email . "',user='" . $user . "', pass='" . $pass . "',address='" . $address . "' where id=" . $id;
//     pdo_execute($sql);

class AccountQuery
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Thêm tài khoản
    public function insert_taikhoan($user, $email, $pass)
    {
        try {
            $sql = "INSERT INTO users (username, email, passwd) VALUES (:user, :email, :pass)";
            $stmt = $this->pdo->prepare($sql);

            // Bind giá trị vào câu truy vấn
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);

            // Thực thi câu truy vấn
            if ($stmt->execute()) {
                return true; // Đăng ký thành công
            } else {
                // Lấy lỗi từ PDO
                $errorInfo = $stmt->errorInfo();
                echo "Error: " . $errorInfo[2]; // Hiển thị lỗi SQL
                return false; // Đăng ký thất bại
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }


    // Lấy tất cả tài khoản
    public function loadall_taikhoan()
    {
        try {
            $sql = "SELECT * FROM taikhoan ORDER BY id DESC";
            $stmt = $this->pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            echo "Error loading accounts: " . $error->getMessage();
            return [];
        }
    }

    // Kiểm tra tài khoản bằng username và password
    public function checkuser($user, $pass)
    {
        try {
            $sql = "SELECT * FROM users WHERE username = :user AND passwd = :pass";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':user' => $user,
                ':pass' => $pass,
            ]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            echo "Error checking user: " . $error->getMessage();
            return false;
        }
    }

    // Kiểm tra email
    public function checkemail($email)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':email' => $email]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $error) {
            echo "Error checking email: " . $error->getMessage();
            return false;
        }
    }

    // Cập nhật tài khoản
    public function update_taikhoan($id, $email, $user, $pass, $address)
    {
        try {
            $sql = "UPDATE users SET email = :email, username = :user, passwd = :pass, address = :address WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':id' => $id,
                ':email' => $email,
                ':username' => $user,
                ':passwd' => $pass,
                ':address' => $address,
            ]);
            return true;
        } catch (Exception $error) {
            echo "Error updating account: " . $error->getMessage();
            return false;
        }
    }
}
