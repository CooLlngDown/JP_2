<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sổ tay Phenikaa</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .content-background {
            background-image: url('../images/nhung-buoc-phat-trien-vung-chac-cua-truong-dai-hoc-phenikaa.jpg');
            background-size: cover;
            background-position: center;
            height: 600px;
            /* Đặt chiều cao cố định */
            position: relative;
        }
    </style>
</head>


<body>
    <nav class="navbar">
        <div class="navbar-left">
            <a href="../home_user.php" target="_blank">
                <img src="../images/OIP.jfif" alt="Logo" class="logo">
            </a>
        </div>
        <div class="navbar-center">
            <ul class="nav-links">
                <li><a href="../home_user.php">Trang chủ</a></li>
                <li><a href="sotay.php">Mục lục</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="search-container">
                <input type="text" id="search-bar" placeholder="Search..." class="search-bar">
                <span class="search-icon" onclick="performSearch()">🔍</span>
            </div>
        </div>
    </nav>

    <section class="table-of-contents">
        <h2>Mục Lục</h2>
        <div class="content-background">
            <div class="content-container">
                <div class="content-box">
                    <div class="circle">1</div>
                    <h3>QUY CHẾ - QUY ĐỊNH</h3>
                    <ul id="content1" style="display: none;">
                        <li><a href="Hoạt động đào tạo tại trường đại học Phenikaa.php">1.Hoạt động đào tạo tại trường
                                đại học Phenikaa</a></li>
                        <li><a href="Hoạt động công tác sinh viên.php">2.Hoạt động công tác sinh viên</a></li>
                        <li><a href="Hoạt động Trung Tâm Tư vấn Hỗ trợ và Đổi mới sáng tạo sinh viên.php">3.Hoạt động
                                Trung Tâm Tư vấn Hỗ trợ và Đổi mới sáng tạo sinh viên</a></li>
                        <li><a href="Trung tâm Thông tin - Thư viện.php">4.Trung tâm Thông tin - Thư viện</a></li>
                    </ul>
                    <button onclick="toggleContent('content1')">+</button>
                </div>

                <div class="content-box">
                    <div class="circle">2</div>
                    <h3>CÔNG TÁC PHÁT TRIỂN ĐẢNG VÀ PHONG TRÀO SINH VIÊN</h3>
                    <ul id="content2" style="display: none;">
                        <li><a href="Đảng ủy trường.php">1.Đảng uỷ trường</a></li>
                        <li><a href="Đoàn thanh niên trường.php">2.Đoàn thanh niên trường</a></li>
                        <li><a href="Phong trào sinh viên 5 tốt.php">3.Phong trào sinh viên 5 tốt</a></li>
                    </ul>
                    <button onclick="toggleContent('content2')">+</button>
                </div>

                <div class="content-box">
                    <div class="circle">3</div>
                    <h3>1001 CÁCH ĐỂ THÀNH CÔNG KHI HỌC ĐẠI HỌC</h3>
                    <ul id="content3" style="display: none;">
                        <li><a href="Lập kế hoạch học tập cá nhân.php">1.Lập kế hoạch học tập cá nhân</a></li>
                        <li><a href="Kỹ năng tự học.php">2.Kỹ năng tự học</a></li>
                        <li><a href="Tham gia hoạt động ngoại khóa.php">3.Tham gia hoạt động ngoại khóa</a></li>
                    </ul>
                    <button onclick="toggleContent('content3')">+</button>
                </div>
            </div>
        </div>
    </section>

    <div class="search-results" id="search-results"></div>


    <!-- Phần cho Js-->

    <script>
        function toggleContent(contentId) {
            const content = document.getElementById(contentId);
            if (content.style.display === "none") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        }


        // Hàm hiển thị/ẩn nội dung
        function toggleContent(contentId) {
            const content = document.getElementById(contentId);
            if (content.style.display === "none") {
                content.style.display = "block";
            } else {
                content.style.display = "none";
            }
        }

    </script>

</body>

</html>