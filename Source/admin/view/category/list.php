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
                    <th scope="col" style="width: 200px;">Image</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($categoryList as $category): ?>
                    <tr>
                        <td></td>
                        <td><?= $category->id_category ?></td>
                        <td><?= $category->title_category ?></td>
                        <td>
                            <div style="height: 100%; width: 100%;">
                                <img style="width: 100%;" src="/DuAn1<?= $category->img_category ?>" alt="">
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning mb-1" style="width: 80px;">
                                <a style="text-decoration: none; color: white;" href="?act=category-update&id=<?= $category->id_category ?>">Update</a>
                            </button>
                            <button type="button" class="btn btn-danger mb-1" style="width: 80px;">
                                <a style="text-decoration: none; color: white;" href="?act=category-delete&id=<?= $category->id_category ?>" onclick="return confirm('Xóa nhá?????')">Delete</a>
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <!-- Khu vực điều hướng -->
        <button type="button" class="btn btn-success">
            <a href="?act=category-create" style="color: white; text-decoration: none;">Trang tạo mới danh mục</a>
        </button>
    </div>