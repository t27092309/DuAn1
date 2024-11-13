<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Tiêu đề trang -->
    <div class="container">
        <h3>Trang Tạo Mới Sản Phẩm</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Tên sản phẩm: </label>
                <input type="text" class="form-control" name="title_product" placeholder="VD: Đi Theo Chân Bác">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Hình ảnh sản phẩm: </label>
                <input class="form-control" type="file" name="file_upload" multiple>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá bán: </label>
                <input type="number" class="form-control" name="price_product" placeholder="VD: 20000">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả sản phẩm: </label>
                <textarea class="form-control" name="description_product" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Tên tác giả: </label>
                <input type="text" class="form-control" name="author_product" placeholder="VD: Xuân Quỳnh">
            </div>
            <div class="mb-3">
                <label for="id_category" class="form-label">Mã thể loại </label>
                <input type="number" class="form-control" name="id_category" placeholder="VD: 1: Tài liệu, 2: Sách giáo khoa">
            </div>
            <button type="submit" name="submitForm" class="btn btn-success">Tạo mới</button>
        </form>

        <p style="color:red"><?= $tbLoi ?></p>
        <p style="color:green"><?= $tbThanhCong ?></p>
    </div>