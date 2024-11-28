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
        <h3>Trang Danh Sách Danh Mục</h3>

        <table class="table table-striped table-bordered">
            <thead table-primary style="text-align: center;">
                <tr>
                    <th scope="col" style="width: 10px;"></th>
                    <th scope="col" style="width: 30px;">ID</th>
                    <th scope="col" style="width: 200px;">Title</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($productList as $product): ?>
                    <tr>
                        <td></td>
                        <td><?= $product->id_product ?></td>
                        <td><?= $product->title_product ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <!-- Khu vực điều hướng -->
        <button type="button" class="btn btn-success">
            <a href="?act=product-create" style="color: white; text-decoration: none;">Trang tạo mới</a>
        </button>
    </div>