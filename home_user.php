<?php
session_start();
include("connect.php");

// Kiểm tra người dùng đã đăng nhập chưa
if (!isset($_SESSION["success"]) || $_SESSION["success"] == false) {
    header("Location: dangnhap.php"); // Điều hướng nếu chưa đăng nhập
    exit();
}

// Lấy thông tin người dùng từ session
$user_id = $_SESSION['user_id'];

// Truy vấn thông tin người dùng từ DB để hiển thị trong form
$stmt = $conn->prepare("SELECT name, email FROM users WHERE user_id=?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

// Xử lý cập nhật thông tin người dùng
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_name = $_POST['name'];

    // Cập nhật chỉ thông tin name vào DB
    $update_stmt = $conn->prepare("UPDATE users SET name=? WHERE user_id=?");
    $update_stmt->bind_param("si", $new_name, $user_id);

    if ($update_stmt->execute()) {
        // Cập nhật session sau khi thay đổi
        $_SESSION['user'] = $new_name;
        echo "<script>alert('Cập nhật thông tin thành công.');</script>";

        // Truy vấn lại thông tin người dùng sau khi cập nhật thành công
        $stmt = $conn->prepare("SELECT name, email FROM users WHERE user_id=?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc(); // Cập nhật thông tin mới vào biến $user
        $stmt->close();
    } else {
        echo "<script>alert('Cập nhật thông tin thất bại.');</script>";
    }
    $update_stmt->close();
}
?>



<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phenikaa University</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <a href="home_user.php"><img src="images/OIP.jfif" alt="Logo"></a>
        </div>

        <!-- Menu Links -->
        <div class="menu-links">
            <a href="home_user.php">Trang Chủ</a>
            <a href="SoTay Phenikaa/sotay.php">Mục Lục</a>
        </div>

        <!-- Search box -->
        <div class="search-box">
            <input type="text" placeholder="Tìm kiếm...">
            <div class="user-icon" id="userIcon">👤</div>
            <!-- User info box -->
            <div class="user-info-box" id="userInfoBox" style="display: none;">
                <p>Xin chào, <strong>A</strong></p>
                <div>
                    <a href="#" style="color: black; text-decoration: none" id="userInfoLink">Thông tin cá nhân</a>
                </div>
                <div>
                    <a href="#" style="color: black; text-decoration: none;">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div class="text-container">
            <div>
                <h1>GIỚI THIỆU CHUNG</h1>
                <p>Được thành lập ngày 10/10/2007 theo Quyết định số 1368/QĐ-TTg, đến ngày 21/11/2018, Trường chính thức
                    mang tên Trường Đại học Phenikaa theo Quyết định số 1609/QĐ-TTg của Thủ tướng Chính phủ. Với sự đầu
                    tư của Tập đoàn Phenikaa, Trường Đại học Phenikaa đã và đang đang phát triển theo định hướng Đổi mới
                    sáng tạo và nghiên cứu trong hệ sinh thái Phenikaa với ba trụ cột là Doanh nghiệp - Giáo dục -
                    Nghiên cứu khoa học.</p>
                <p1>TẦM NHÌN</p1>
                <p>Trường Đại học Phenikaa phấn đấu trở thành:</p>
                <p>Đại học định hướng đổi mới sáng tạo, xuất sắc trong đào tạo, nghiên cứu, chuyển giao, khởi nghiệp và
                    hướng nghiệp; nơi đánh thức và hiện thực hóa tiềm năng; luôn gắn kết chặt chẽ với nhu cầu phát triển
                    và tạo ra giá trị mới cho cộng đồng.</p>
                <p>Top 100 trường đại học tốt nhất châu Á vào năm 2035.</p>
                <p1>SỨ MỆNH</p1>
                <p>Đào tạo nguồn nhân lực chất lượng cao cho xã hội dựa trên nền tảng đổi mới sáng tạo, nghiên cứu khoa
                    học, phát triển công nghệ và thực hành.</p>
                <p>Tạo môi trường nghiên cứu chuyên nghiệp và tự do sáng tạo để đánh thức và phát huy tối đa sở trường
                    của mỗi người, tạo ra những ảnh hưởng đột phá trong khoa học công nghệ và phát triển kinh tế xã hội.
                </p>
                <p1>GIÁ TRỊ CỐT LÕI</p1>
                <p>Trải nghiệm - Xuất sắc - Tự hào</p>
                <p1>TRIẾT LÝ GIÁO DỤC</p1>
                <p>Tôn trọng - Sáng tạo - Phản biện</p>
            </div>
        </div>
    </div>

    <div class="overlay" id="overlay"></div>
    <!-- User Info Form -->
    <div class="user-info-form" id="userInfoForm">
        <h2>Thông tin cá nhân</h2>
        <form method="POST" action="">
            <label for="name">Tên:</label><br>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"
                readonly><br><br>

            <button type="submit">Lưu thay đổi</button>
            <button type="button" id="closeForm">Đóng</button>
            <button type="button"><a href="dangxuat.php">Đăng xuất</a></button>
        </form>
    </div>


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

    <!-- Footer -->
    <div class="footer">
        © 2024 Phenikaa University - Designed by Students
    </div>
    <script src="script.js"></script>

</body>

</html>