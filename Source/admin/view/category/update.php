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
    <div class="container">
        <h3>Trang Chỉnh sửa Danh Mục</h3>
        <a class="btn btn-primary" href="?act=product-list" role="button">Back</a>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Tên Danh mục: </label>
                <input type="text" class="form-control" name="title_product" placeholder="VD: Văn phòng phẩm" value="<?= $category->title_category ?>">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Hình ảnh Danh mục: </label>
                <input class="form-control" type="file" name="file_upload" multiple value="<?= $category->img_category ?>">
            </div>
            <button type="submit" name="submitForm" class="btn btn-success">Lưu thay đổi</button>
        </form>

        <p style="color:red"><?= $tbLoi ?></p>
        <p style="color:green"><?= $tbThanhCong ?></p>
    </div>