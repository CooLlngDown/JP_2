<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoạt động đào tạo tại trường đại học Phenikaa</title>
    <style>
        .container {
            max-width: 1200px;
            margin: 40px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-left: 80px;
        }

        .page {
            display: none;
        }

        .page.active {
            display: block;
        }

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination button {
            padding: 5px 10px;
            margin: 5px;
            font-size: 0.9em;
            cursor: pointer;
            background-color: black;
            color: white;
            border: none;
            width: 100px;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar">
        <div class="navbar-left">
            <img src="../images/OIP.jfif" alt="Logo" class="logo">
        </div>
        <div class="navbar-center">
            <ul class="nav-links">
                <li><a href="../home_user.php">Trang chủ</a></li>
                <li><a href="sotay.php">Mục lục</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="search-container">
                <input type="text" placeholder="Search..." class="search-bar">
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Hoạt động đào tạo tại trường đại học Phenikaa</h1><br><br>


        <div class="page active" id="page1">
            <h2>1.1 Chương trình đào tạo bậc đại học?</h2><br><br>

            <p>1.1.1 Chương trình đào tạo bậc đại học được xây dựng theo đơn vị tín chỉ, cấu trúc từ các môn học hoặc
                học phần (sau đây gọi là học phần), trong đó mỗi học phần bắt buộc sẽ được phân loại vào các nhóm thuộc
                chương trình đào tạo theo quy định hiện hành của Bộ Giáo dục và Đào tạo. Trường hợp đào tạo song ngành
                hoặc đào tạo ghép ngành - ngành phụ, chương trình đào tạo phải thể hiện rõ khối lượng học tập tương ứng
                với từng chương trình.</p><br>
            <p>1.1.2 Nội dung, chuẩn đầu ra của chương trình đào tạo áp dụng chung đối với các hình thức đào tạo, phương
                thức tổ chức đào tạo và đối tượng đào tạo khác nhau; các học phần có thể được điều chỉnh để phù hợp với
                từng đối tượng khác nhau nhưng về cơ bản không được phép thay đổi quá 20% so với khối lượng tín chỉ đã
                xác định trước.</p><br>
            <p>1.1.3 Chương trình đào tạo phải đáp ứng đầy đủ và kịp thời các yêu cầu của ngành nghề và xã hội. Đối với
                sinh viên đã hoàn thành chương trình đào tạo và được công nhận tốt nghiệp, cần phải đảm bảo rằng thời
                gian đào tạo không vượt quá mức quy định hiện hành.</p><br>
            <p>1.1.4 Mỗi hình thức đào tạo, chương trình đào tạo có kế hoạch học tập chuẩn toàn khóa đã định hướng cho
                sinh viên.</p><br>
            <p> a) Thời gian học tập chuẩn toàn khóa không vượt quá 20% so với thời gian học tập chuẩn toàn khóa của mỗi
                ngành. Đối với sinh viên làm việc bán thời gian hoặc có lý do chính đáng, thời gian học tập có thể điều
                chỉnh để phù hợp với thời gian học chính thức.</p><br>
            <p> b) Thời gian theo kế hoạch học tập chuẩn toàn khoá đối với hình thức đào tạo vừa làm vừa học dài hơn tối
                thiểu 20% so với hình thức đào tạo chính quy của cùng chương trình đào tạo.</p><br>
        </div>

        <div class="page" id="page2">
            <p>1.1.5 Thời gian tối đa để sinh viên hoàn thành khóa học không vượt quá 02 (hai) lần thời gian theo kế
                hoạch học tập chuẩn toàn khoá đối với mỗi hình thức đào tạo. Đối với sinh viên học liên thông đã được
                miễn trừ khối lượng tín chỉ tích lũy, thời gian tối đa để sinh viên hoàn thành khóa học được xác định
                trên cơ sở thời gian theo kế hoạch học tập chuẩn toàn khóa giảm tương ứng với khối lượng được miễn trừ.
            </p><br>
        </div>


        <div class="pagination">
            <button onclick="prevPage()">Trang trước</button>
            <button onclick="nextPage()">Trang sau</button>
        </div>

        <script>
            let currentPage = 1;
            const totalPages = 2; // Tổng số trang

            function showPage(pageNumber) {
                // Ẩn tất cả các trang
                const pages = document.querySelectorAll('.page');
                pages.forEach(page => page.classList.remove('active'));

                // Hiển thị trang hiện tại
                document.getElementById('page' + pageNumber).classList.add('active');
            }

            function nextPage() {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            }

            function prevPage() {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            }
        </script>

    </div>



</body>

</html>