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
        <h3>Trang Danh Sách Sản Phẩm</h3>
        <!-- Khu vực điều hướng -->
        <button type="button" class="btn btn-success">
            <a href="?act=product-create" style="color: white; text-decoration: none;">Trang tạo mới</a>
        </button>
        <table class="table table-striped table-bordered">
            <thead table-primary style="text-align: center;">
                <tr>
                    <th scope="col" style="width: 10px;"></th>
                    <th scope="col" style="width: 30px;">ID</th>
                    <th scope="col" style="width: 200px;">Title</th>
                    <th scope="col" style="width: 200px;">Image</th>
                    <th scope="col" style="width: 80px;">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col" style="width: 150px;">Author</th>
                    <th scope="col" style="width: 10px;">ID Category</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($productList as $product): ?>
                    <tr>
                        <td></td>
                        <td><?= $product->id_product ?></td>
                        <td><?= $product->title_product ?></td>
                        <td>
                            <div style="height: 100%; width: 100%;">
                                <img style="width: 100%;" src="/DuAn1<?= $product->img_product ?>" alt="">
                            </div>
                        </td>
                        <td><?= $product->price_product ?></td>
                        <td><?= $product->description_product ?></td>
                        <td><?= $product->author_product ?></td>
                        <td><?= $product->id_category ?></td>
                        <td>
                            <button type="button" class="btn btn-warning mb-1" style="width: 80px;">
                                <a style="text-decoration: none; color: white;" href="?act=product-update&id=<?= $product->id_product ?>">Update</a>
                            </button>
                            <button type="button" class="btn btn-danger mb-1" style="width: 80px;">
                                <a style="text-decoration: none; color: white;" href="?act=product-delete&id=<?= $product->id_product ?>" onclick="return confirm('Xóa nhá?????')">Delete</a>
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>