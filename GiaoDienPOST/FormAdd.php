<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Người Dùng Mới</title>
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
            <div class="d-flex align-items-center">
                <a href="User.php"><img src="./Assets/img-logo/Logo-DH-Phenikaa-V-Bl.webp" alt="Logo"
                        class="logo me-2"></a>
                <h1 class="mb-0"><a href="User.php" style="text-decoration: none; color: black;">Thêm Người Dùng
                        Mới</a></h1>
            </div>
        </div>
    </header>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div id="form-container" class="form-container w-100">
            <form id="new-user-form" class="p-4 shadow rounded bg-white" method="POST">
                <div class="mb-3">
                    <label for="userId" class="form-label">User ID:</label>
                    <input type="text" id="userId" name="userId" class="form-control" placeholder="Nhập User ID"
                        required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Tên:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu:</label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="Nhập mật khẩu" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Thêm Người Dùng</button>
            </form>
        </div>
    </div>
    <?php
    include '../connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Nhận dữ liệu từ form
        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Kiểm tra xem user_id hoặc email đã tồn tại trong cơ sở dữ liệu hay chưa
        $checkSql = "SELECT * FROM users WHERE user_id = ? OR email = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("ss", $userId, $email);
        $checkStmt->execute();
        $result = $checkStmt->get_result();

        if ($result->num_rows > 0) {
            // Nếu user_id hoặc email đã tồn tại, hiển thị thông báo lỗi
            echo "<script>alert('User ID hoặc Email đã tồn tại. Vui lòng nhập thông tin khác.'); window.history.back();</script>";
        } else {
            // Nếu cả user_id và email chưa tồn tại, thực hiện thêm mới người dùng
            $sql = "INSERT INTO users (user_id, name, email, password) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $userId, $name, $email, $password);

            // Thực thi truy vấn và kiểm tra kết quả
            if ($stmt->execute()) {
                echo "<script>alert('Người dùng được thêm thành công');</script>";
                header("Location: User.php");
            } else {
                echo "Lỗi: " . $stmt->error;
            }
            // Đóng statement và kết nối
            $stmt->close();
        }

        // Đóng statement kiểm tra và kết nối
        $checkStmt->close();
        $conn->close();
    }
    ?>

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



    <div id="success-message" class="alert alert-success mt-3" style="display:none;"></div>
    <div id="error-message" class="alert alert-danger mt-3" style="display:none;"></div>
    <script src="../script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>