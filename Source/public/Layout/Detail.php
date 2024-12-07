<?php
$conn = new mysqli('localhost', 'root', '', 'duan1');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT p.title_product, pd.* 
        FROM product_detail pd 
        JOIN product p ON pd.id_product = p.id_product";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <a href="add_product_detail.php">Add New Product Detail</a>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Supplier</th>
            <th>Publisher</th>
            <th>Publish Date</th>
            <th>Weight</th>
            <th>Size</th>
            <th>Page Number</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['title_product'] ?></td>
            <td><?= $row['supplier'] ?></td>
            <td><?= $row['publisher'] ?></td>
            <td><?= $row['publish_date'] ?></td>
            <td><?= $row['weight'] ?> </td>
            <td><?= $row['size'] ?></td>
            <td><?= $row['page_number'] ?></td>
            <td>
                <a href="edit_product_detail.php?id=<?= $row['id_product'] ?>">Edit</a> |
                <a href="delete_product_detail.php?id=<?= $row['id_product'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
