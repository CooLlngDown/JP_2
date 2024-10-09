<?php
include '../connect.php'; // Kết nối tới cơ sở dữ liệu

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    // Câu truy vấn để xóa người dùng dựa trên user_id
    $sql = "DELETE FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_id); // "s" là chuỗi cho user_id

    // Kiểm tra xem truy vấn có thành công không
    if ($stmt->execute()) {
        echo "<script>alert('Người dùng đã được xóa thành công!');</script>";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Không tìm thấy user_id.";
}

$conn->close();

header("Location: User.php");
exit();
?>