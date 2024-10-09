<?php
// Kết nối cơ sở dữ liệu
include("../connect.php");

// Khởi tạo biến để lưu thông báo lỗi
$message = "";

// Kiểm tra xem có quyche_id trong URL hay không
if (isset($_GET['quyche_id'])) {
    $quyche_id = $_GET['quyche_id'];

    // Kiểm tra xem form có được gửi đi không
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lấy dữ liệu từ form
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Cập nhật dữ liệu vào cơ sở dữ liệu
        $update_query = "UPDATE quyche SET title = ?, description = ? WHERE quyche_id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param('ssi', $title, $content, $quyche_id);

        if ($stmt->execute()) {
            $message = "Bài viết đã được cập nhật thành công!";
        } else {
            $message = "Lỗi khi cập nhật bài viết.";
        }
    }

    // Truy vấn để lấy chi tiết bài viết từ quyche_id
    $query = "SELECT title, description FROM quyche WHERE quyche_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $quyche_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Kiểm tra nếu có dữ liệu trả về
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['description'];
    } else {
        echo "Không tìm thấy bài viết.";
        exit;
    }
} else {
    echo "ID bài viết không hợp lệ.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Bài Đăng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../styleChatbox.css">
</head>

<body>
    <!-- Header with Title and Create Post Button -->
    <header class="bg-primary text-white p-4">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Logo và tiêu đề nằm chung trong một thẻ div -->
            <div class="d-flex align-items-center">
                <a href="../home_admin.php"><img src="./Assets/img-logo/Logo-DH-Phenikaa-V-Bl.webp" alt="Logo"
                        class="logo me-2"></a>
                <h1 class="mb-0">Quản lý Bài Đăng</h1>
            </div>
            <button class="button type1" onclick="window.location.href='FormPost.php';">
                <span class="btn-txt">Tạo Mới</span>
            </button>
        </div>
    </header>

    <div class="container mt-4">
        <div class="content-wrapper">
            <?php if ($message): ?>
                <div class="alert alert-info"><?php echo $message; ?></div>
            <?php endif; ?>

            <!-- Form chỉnh sửa bài đăng -->
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="<?php echo htmlspecialchars($title); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Nội dung</label>
                    <textarea class="form-control" id="content" name="content" rows="6"
                        required><?php echo htmlspecialchars($content); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="PostQuyche.php" class="btn btn-secondary">Quay lại</a>
            </form>
        </div>
    </div>
    <script src="../script.js"></script>
</body>

</html>