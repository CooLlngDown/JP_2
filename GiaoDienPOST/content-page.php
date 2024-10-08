<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang nội dung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .content-section {
            display: none;
            /* Ẩn tất cả các phần nội dung mặc định */
        }

        .content-wrapper {
            background-color: #f9f9f9;
            /* Màu nền nhạt */
            padding: 20px;
            /* Thêm khoảng cách trong div */
            border-radius: 8px;
            /* Bo góc nhẹ cho div */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Hiệu ứng đổ bóng */
            margin-bottom: 20px;
            /* Khoảng cách dưới giữa các phần */
        }

        .content-wrapper h2 {
            font-size: 1.75rem;
            /* Kích thước tiêu đề lớn hơn */
            font-weight: bold;
            /* Chữ đậm */
            margin-bottom: 15px;
            /* Khoảng cách dưới tiêu đề */
        }

        .content-wrapper p {
            font-size: 1.1rem;
            /* Kích thước văn bản lớn hơn một chút */
            line-height: 1.6;
            /* Dãn dòng cho dễ đọc */
            text-align: justify;
            /* Canh đều hai bên cho giống bài báo */
        }

        .bg-primary {
            background-color: #79c5f1 !important;
            /* Màu nền */
        }

        .text-white {
            color: #212529 !important;
            /* Màu chữ */
        }

        .p-4 {
            padding: 1.5rem !important;
            /* Padding đều xung quanh */
        }

        .logo {
            width: 100px;
            /* Kích thước logo */
            height: auto;
            /* Đảm bảo logo giữ nguyên tỷ lệ */
        }

        @media (max-width: 768px) {
            .logo {
                width: 70px;
                /* Giảm kích thước logo trên màn hình nhỏ */
            }
        }

        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .d-flex {
            display: flex !important;
            /* Sử dụng flexbox */
        }

        .justify-content-between {
            justify-content: space-between !important;
            /* Phân bố đều hai đầu */
        }

        .align-items-center {
            align-items: center !important;
            /* Căn giữa dọc */
        }

        h1.mb-0 {
            margin-bottom: 0 !important;
            /* Xóa margin dưới của h1 */
            font-size: 2rem;
            /* Kích thước font lớn */
        }

        body {
            font-family: 'Gowun Batang', sans-serif;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

    <header class="bg-primary text-white p-4">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <!-- Logo và tiêu đề nằm chung trong một thẻ div -->
            <div class="d-flex align-items-center">
                <a href="../home_admin.php"><img src="./Assets/img-logo/Logo-DH-Phenikaa-V-Bl.webp" alt="Logo"
                        class="logo me-2"></a>
                <!-- Thêm class logo và margin -->
                <h1 class="mb-0"><a href="./Post.php" style="text-decoration: none; color: black;">Nội Dung Bài Đăng</a>
                </h1>
            </div>
        </div>
    </header>

    <div class="container mt-4">
        <div class="content-wrapper">
            <h2>Trang nội dung</h2>

            <!-- Các phần nội dung -->
            <!-- section 1 -->
            <div id="hoat-dong-dao-tao-tai-truong-dai-hoc-phenikaa" class="content-section">
                <h2> Hoạt động đào tạo tại trường đại học Phenikaa</h2>
                <p>Nội dung chi tiết về Hoạt động đào tạo tại trường đại học Phenikaa...</p>
            </div>

            <div id="hoat-dong-cong-tac-sinh-vien" class="content-section">
                <h2>Hoạt động công tác sinh viên</h2>
                <p>Nội dung chi tiết về Hoạt động công tác sinh viên...</p>
            </div>

            <div id="hoat-dong-trung-tam-tu-van-ho-tro" class="content-section">
                <h2>Hoạt động Trung tâm , Tư vấn , Hỗ trợ và Đổi mới sáng tạo sinh viên</h2>
                <p>Nội dung chi tiết về Hoạt động Trung tâm , Tư vấn , Hỗ trợ và Đổi mới sáng tạo sinh viên...</p>
            </div>

            <div id="trung-tam-thong-tin-thu-vien" class="content-section">
                <h2>Trung tâm Thông tin - Thư viện</h2>
                <p>Nội dung chi tiết về Trung tâm Thông tin - Thư viện...</p>
            </div>

            <div id="cac-quy-dinh-ve-thanh-toan-hoc-phi" class="content-section">
                <h2>Các quy định về thanh toán học phí</h2>
                <p>Nội dung chi tiết về Các quy định về thanh toán học phí...</p>
            </div>

            <div id="cac-chuong-trinh-trao-doi-sinh-vien" class="content-section">
                <h2>Các chương trình trao đổi sinh viên quốc tế</h2>
                <p>Nội dung chi tiết về Các chương trình trao đổi sinh viên quốc tế...</p>
            </div>

            <div id="ky-tuc-xa-sinh-vien" class="content-section">
                <h2>Ký túc xá sinh viên</h2>
                <p>Nội dung chi tiết về Ký túc xá sinh viên...</p>
            </div>

            <div id="bao-hiem-y-te" class="content-section">
                <h2>Bảo hiểm Y tế</h2>
                <p>Nội dung chi tiết về Bảo hiểm Y tế...</p>
            </div>

            <div id="nghien-cuu-khoa-hoc-sinh-vien" class="content-section">
                <h2>Nghiên cứu khoa học sinh viên</h2>
                <p>Nội dung chi tiết về Nghiên cứu khoa học sinh viên...</p>
            </div>

            <div id="he-thong-cong-nghe-thong-tin" class="content-section">
                <h2> Hệ thống Công nghệ thông tin</h2>
                <p>Nội dung chi tiết về Hệ thống Công nghệ thông tin...</p>
            </div>

            <div id="khieu-nai-to-cao-kien-nghi-phan-anh" class="content-section">
                <h2>Khiếu nại, tố cáo, kiến nghị phản ánh</h2>
                <p>Nội dung chi tiết về Khiếu nại, tố cáo, kiến nghị phản ánh...</p>
            </div>

            <div id="bo-quy-tac-ung-xu" class="content-section">
                <h2>Bộ Quy tắc ửng xử văn hóa học đường Trường đại học Phenikaa</h2>
                <p>Nội dung chi tiết về Bộ Quy tắc ửng xử văn hóa học đường Trường đại học Phenikaa...</p>
            </div>

            <!-- section 2 -->
            <div id="dang-uy-truong" class="content-section">
                <h2>Đảng ủy Trường</h2>
                <p>Nội dung chi tiết về các hoạt động Đảng ủy Trường...</p>
            </div>

            <div id="doan-thanh-nien" class="content-section">
                <h2>Đoàn thanh niên</h2>
                <p>Nội dung chi tiết về đoàn thanh niên...</p>
            </div>

            <div id="phong-trao-sinh-vien" class="content-section">
                <h2>Phong trào sinh viên 5 tốt</h2>
                <p>Nội dung chi tiết về phong trào sinh viên 5 tốt...</p>
            </div>

            <div id="hoat-dong-cau-lac-bo" class="content-section">
                <h2>Hoạt động Câu lạc bộ</h2>
                <p>Nội dung chi tiết về hoạt động câu lạc bộ...</p>
            </div>


            <div id="phong-trao-the-duc-the-thao" class="content-section">
                <h2>Phong trào thể dục thể thao</h2>
                <p>Nội dung chi tiết về Phong trào thể dục thể thao...</p>
            </div>

            <div id="danh-hieu" class="content-section">
                <h2>Các danh hiệu thi đua</h2>
                <p>Nội dung chi tiết về các thành tựu thi đua...</p>
            </div>


            <!-- section 3 -->
            <div id="hoc-tap-thanh-cong" class="content-section">
                <h2>Làm thế nào để để học tập thành công ở trường Đại học ?</h2>
                <p>Nội dung chi tiết về Làm thế nào để để học tập thành công ở trường Đại học ?...</p>
            </div>

            <div id="goc-ban-be" class="content-section">
                <h2>Góc bạn bè và tình yêu</h2>
                <p>Nội dung chi tiết về Góc bạn bè và tình yêu...</p>
            </div>

            <div id="vui-choi" class="content-section">
                <h2>Ăn và chơi</h2>
                <p>Nội dung chi tiết về hoạt động Ăn và chơi..</p>
            </div>

            <div id="di-chuyen" class="content-section">
                <h2>Di chuyen</h2>
                <p>Nội dung chi tiết về cách thức di chuyển...</p>
            </div>

            <div id="hoat-dong" class="content-section">
                <h2>Hoạt động ngoại khóa</h2>
                <p>Nội dung chi tiết về các Hoạt động ngoại khóa...</p>
            </div>

        </div>
    </div>

    <script>
        // Hàm để lấy giá trị của tham số từ URL
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        window.onload = function () {
            const section = new URLSearchParams(window.location.search).get('section');
            if (section) {
                const contentSection = document.getElementById(section);
                if (contentSection) {
                    contentSection.style.display = 'block'; // Hiển thị phần nội dung
                } else {
                    alert('Không tìm thấy nội dung tương ứng!');
                }
            } else {
                alert('Không có nội dung được chọn!');
            }
        }    
    </script>

</body>

</html>