<?php
include 'db_connection.php';

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart($userId, $productId, $quantity)
{
    global $pdo;

    // Kiểm tra số lượng
    if ($quantity <= 0) {
        die("Lỗi: Số lượng không hợp lệ.");
    }

    // Lấy ID giỏ hàng của người dùng
    $stmt = $pdo->prepare("SELECT id_cart FROM cart WHERE id_user = ?");
    $stmt->execute([$userId]);
    $cart = $stmt->fetch(PDO::FETCH_ASSOC);

    // Nếu không có giỏ hàng, tạo giỏ hàng mới
    if (!$cart) {
        $stmt = $pdo->prepare("INSERT INTO cart (id_user) VALUES (?)");
        $stmt->execute([$userId]);
        $cartId = $pdo->lastInsertId();
    } else {
        $cartId = $cart['id_cart'];
    }

    // Thêm sản phẩm vào giỏ hàng hoặc cập nhật số lượng
    $stmt = $pdo->prepare("INSERT INTO cart_items (id_cart, id_product, quantity) 
                           VALUES (?, ?, ?) 
                           ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)");
    $stmt->execute([$cartId, $productId, $quantity]);
}

// Hàm lấy sản phẩm trong giỏ hàng
function getCartItems($userId)
{
    global $pdo;

    $stmt = $pdo->prepare("
        SELECT ci.id_cart_item, ci.id_product, p.title_product, p.price_product, ci.quantity, p.img_product
        FROM cart_items ci
        JOIN cart c ON ci.id_cart = c.id_cart
        JOIN product p ON ci.id_product = p.id_product
        WHERE c.id_user = ?
    ");
    $stmt->execute([$userId]);

    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Trả về mảng trống nếu không có sản phẩm
    return $items;
}


// Hàm cập nhật số lượng sản phẩm
function updateCartItem($cartItemId, $quantity)
{
    global $pdo;

    // Kiểm tra số lượng hợp lệ
    if ($quantity <= 0) {
        die("Lỗi: Số lượng không hợp lệ.");
    }

    // Kiểm tra sản phẩm tồn tại trong giỏ hàng
    $stmt = $pdo->prepare("SELECT 1 FROM cart_items WHERE id_cart_item = ?");
    $stmt->execute([$cartItemId]);

    if ($stmt->fetch()) {
        // Cập nhật số lượng
        $stmt = $pdo->prepare("UPDATE cart_items SET quantity = ? WHERE id_cart_item = ?");
        $stmt->execute([$quantity, $cartItemId]);
    } else {
        die("Lỗi: Sản phẩm không tồn tại trong giỏ hàng.");
    }
}

// Hàm xóa sản phẩm khỏi giỏ hàng
function removeCartItem($cartItemId)
{
    global $pdo;

    // Kiểm tra sản phẩm tồn tại trong giỏ hàng
    $stmt = $pdo->prepare("SELECT 1 FROM cart_items WHERE id_cart_item = ?");
    $stmt->execute([$cartItemId]);

    if ($stmt->fetch()) {
        // Xóa sản phẩm
        $stmt = $pdo->prepare("DELETE FROM cart_items WHERE id_cart_item = ?");
        $stmt->execute([$cartItemId]);
    } else {
        die("Lỗi: Sản phẩm không tồn tại trong giỏ hàng.");
    }
}

// Hàm xóa toàn bộ giỏ hàng của người dùng
function clearCart($userId)
{
    global $pdo;

    // Xóa tất cả sản phẩm trong giỏ hàng
    $stmt = $pdo->prepare("DELETE FROM cart_items WHERE id_cart IN (SELECT id_cart FROM cart WHERE id_user = ?)");
    $stmt->execute([$userId]);

    // Xóa giỏ hàng của người dùng
    $stmt = $pdo->prepare("DELETE FROM cart WHERE id_user = ?");
    $stmt->execute([$userId]);
}

?>