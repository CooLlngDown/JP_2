<?php
// Kết nối cơ sở dữ liệu
include("../connect.php");


// Kiểm tra xem form có được gửi đi không
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];

    // Kiểm tra xem các trường đã được điền đầy đủ hay chưa
    if (empty($title) || empty($content) || $category === 'category0') {
        $message = "Vui lòng điền đầy đủ thông tin và chọn nơi lưu trữ.";
    } else {
        // Dựa vào lựa chọn của người dùng, lưu vào bảng tương ứng
        if ($category === 'Quy Chế - Quy Định') {
            $insert_query = "INSERT INTO quyche (title, description) VALUES (?, ?)";
        } elseif ($category === 'Phong trào sinh viên') {
            $insert_query = "INSERT INTO mucluc (title, description) VALUES (?, ?)";
        } elseif ($category === '1001 cách để thành công') {
            $insert_query = "INSERT INTO success (title, description) VALUES (?, ?)";
        }

        // Chuẩn bị và thực thi câu truy vấn
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param('ss', $title, $content);

        if ($stmt->execute()) {
            header("Location: PostQuyche.php");
            echo "<script>alert('Tạo bài mới thành công');</script>";
        } else {
            echo "<script>alert('Có lỗi, chưa thể tạo bài mới');</script>";
        }

        // Đóng câu truy vấn
        $stmt->close();
    }
}

// Đóng kết nối
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tạo Mới</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./Assets/css/form.css">
    <link rel="stylesheet" href="../styleChatbox.css">
</head>

<body>

    <header class="bg-primary text-white p-4">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Logo và tiêu đề nằm chung trong một thẻ div -->
            <div class="d-flex align-items-center">
                <a href="PostQuyche.php"><img src="./Assets/img-logo/Logo-DH-Phenikaa-V-Bl.webp" alt="Logo"
                        class="logo me-2"></a>
                <h1 class="mb-0"><a href="PostQuyche.php" style="text-decoration: none; color: black;">Tạo Bài Đăng
                        Mới</a>
                </h1>
            </div>
        </div>
    </header>

    <!-- Căn giữa form sử dụng Bootstrap -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div id="form-container" class="form-container w-100">
            <form id="new-item-form" method="POST" class="p-4 shadow rounded bg-white">
                <div class="mb-3">
                    <label for="title" class="form-label">Tên tiêu đề:</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Nhập tiêu đề">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Nội dung:</label>
                    <textarea id="content" name="content" class="form-control" placeholder="Nhập nội dung"
                        rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Lựa chọn thêm vào đâu:</label>
                    <select id="category" name="category" class="form-select" required>
                        <option value="category0">------ Chọn Nơi Lưu Trữ ------</option>
                        <option value="Quy Chế - Quy Định">Quy chế - Quy định</option>
                        <option value="Phong trào sinh viên">Phong trào sinh viên</option>
                        <option value="1001 cách để thành công">1001 cách để thành công</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Tạo</button>
            </form>
        </div>
    </div>

    <!-- Phần tử để hiển thị thông báo -->
    <div id="success-message" class="alert alert-success mt-3" style="display:none;"></div>
    <div id="error-message" class="alert alert-danger mt-3" style="display:none;"></div>
    <!-- Chat Button -->
    <div class="chat-button" id="chatButton">
        💬
    </div>

    <!-- Chat Box -->
    <div class="chat-box" id="chatBox">
        <div class="chat-header">
            <h4>Chat</h4>
            <button id="closeChat">✖️</button>
        </div>
        <div class="chat-body">
            <p>Bạn mong muốn biết thêm về?</p>
            <form id="chatForm">
                <button type="button" data-issue="quyche">Quy chế - Quy định</button><br><br>
                <button type="button" data-issue="ptdang">Công tác phát triển Đảng</button><br><br>
                <button type="button" data-issue="cachthanhcong">Cách thành công ở đại học</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('closeChat').addEventListener('click', function () {
            document.getElementById('chatBox').style.display = 'none';
        });

        document.getElementById('chatForm').addEventListener('click', function (event) {
            if (event.target.tagName === 'BUTTON') {
                const issue = event.target.getAttribute('data-issue');
                displayResponse(issue);
            }
        });

        function displayResponse(issue) {
            const chatBody = document.querySelector('.chat-body');
            let responseHTML = '';

            if (issue === 'quyche') {
                responseHTML = `
                <div class="response">
                    <p>Các câu hỏi thường gặp về Quy chế-Quy định:</p>
                    <ul>
                        <li><a href="SoTay Phenikaa/Hoạt động đào tạo tại trường đại học Phenikaa.php">Hoạt động đào tạo?</a></li>
                        <li><a href="SoTay Phenikaa/Hoạt động công tác sinh viên.php">Hoạt động công tác sinh viên?</a></li>
                    </ul>
                </div>`;
            } else if (issue === 'ptdang') {
                responseHTML = `
                <div class="response">
                    <p>Các câu hỏi thường gặp về Công tác phát triển Đảng:</p>
                    <ul>
                        <li><a href="SoTay Phenikaa/Đoàn thanh niên trường.php">Đoàn thanh niên trường?</a></li>
                        <li><a href="SoTay Phenikaa/Phong trào sinh viên 5 tốt.php">Sinh viên 5 tốt?</a></li>
                    </ul>
                </div>`;
            } else if (issue === 'cachthanhcong') {
                responseHTML = `
                <div class="response">
                    <p>Các câu hỏi thường gặp về cách thành công ở đại học:</p>
                    <ul>
                        <li><a href="SoTay Phenikaa/Kỹ năng tự học.php">Khả năng tự học</a></li>
                        <li><a href="SoTay Phenikaa/Lập kế hoạch học tập cá nhân.php">Lập kế hoạch học tập</a></li>
                    </ul>
                </div>`;
            }

            chatBody.innerHTML += responseHTML;
        }
    </script>
    <script src="../script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>