<main class="catalog mb">
   <div class="boxleft">
      <div class="mb">
         <div class="box_title">ĐĂNG KÝ THÀNH VIÊN</div>
         <div class="box_content">
           <form action="index.php?act=dangky" method="post">
            <span>Tên đăng nhập: <br></span>
            <input type="text" name="user" placeholder="Username" required>
            <span>Email: <br></span>
            <input type="email" name="email" placeholder="Email" required>
            <span>Password: <br></span>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="submit" name="dangky" value="Đăng ký">
            <input type="reset" value="Nhập lại">
           </form>
           <h2 class="thongbao">
           <?php
           if (isset($thongbao) &&($thongbao)!="") {
               echo $thongbao;
           }
           ?>
           </h2>
         </div>
      </div>
   </div>
      <?php include "view/boxright.php"; ?>
</main>





 <style>
  
.boxleft {
  width: 400px; 
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin: 0 auto; 
}

/* Style cho tiêu đề của form */
.box_title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  color: #333;
  text-align: center;
}


.box_content {
  text-align: center; 
}

/* Style cho các nhãn và input */
.box_content span {
  font-weight: bold;
  margin-top: 10px;
  display: block;
}

.box_content input[type="text"],
.box_content input[type="email"],
.box_content input[type="password"] {
  width: calc(100% - 20px); /* Để các input có kích thước phù hợp */
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.box_content input[type="submit"],
.box_content input[type="reset"] {
  width: calc(50% - 20px);
  padding: 10px;
  margin: 10px 5px; /* Khoảng cách giữa các nút */
  border: none;
  border-radius: 5px;
  font-size: 16px;
  background-color: #007bff;
  color: white;
  cursor: pointer;
}

.box_content input[type="submit"]:hover,
.box_content input[type="reset"]:hover {
  background-color: #0056b3;
}

/* Style cho thông báo */
.thongbao {
  color: #d9534f; /* Màu đỏ cho thông báo lỗi */
  font-size: 18px;
  margin-top: 20px;
  text-align: center; /* Căn giữa thông báo */
}


</style>
 