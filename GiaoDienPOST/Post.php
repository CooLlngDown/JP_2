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


    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" data-section="section1">Quy Chế -
                            Quy
                            Định</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="section2">Phòng Trào Sinh Viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="section3">1001 Cách Để Thành Công</a>
                    </li>
                </ul>
            </div>


        </div>
    </nav>

    <!-- Content Sections -->
    <div class="container mt-4">
        <!-- Search Bar -->
        <div class="input-group mb-5">
            <input type="text" id="globalSearch" class="form-control" placeholder="Tìm kiếm nội dung"
                aria-label="Tìm kiếm nội dung">
            <button class="btn btn-outline-secondary" type="button" id="searchButton">Tìm kiếm</button>
        </div>

        <!-- Section 1: Quy Chế - Quy Định -->
        <div id="section1" class="content-section mb-4" data-content="quy chế quy định">
            <h2 class="mb-4">Quy Chế - Quy Định</h2>


            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=hoat-dong-dao-tao-tai-truong-dai-hoc-phenikaa'">
                    1. Hoạt động đào tạo tại trường đại học Phenikaa
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Hoạt động đào tạo tại trường đại học Phenikaa')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                            data-item-name="Hoạt động đào tạo tại trường đại học Phenikaa"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=hoat-dong-cong-tac-sinh-vien'">
                    2. Hoạt động công tác sinh viên
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Hoạt động công tác sinh viên')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Hoạt động công tác sinh viên"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=hoat-dong-trung-tam-tu-van-ho-tro'">
                    3. Hoạt động Trung tâm, Tư vấn, Hỗ trợ và Đổi mới sáng tạo sinh viên
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Hoạt động Trung tâm, Tư vấn, Hỗ trợ và Đổi mới sáng tạo sinh viên')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                            data-item-name="Hoạt động Trung tâm, Tư vấn, Hỗ trợ và Đổi mới sáng tạo sinh viên"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=trung-tam-thong-tin-thu-vien'">
                    4. Trung tâm Thông tin - Thư viện
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Trung tâm Thông tin - Thư viện')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Trung tâm Thông tin - Thư viện"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=cac-quy-dinh-ve-thanh-toan-hoc-phi'">
                    5. Các quy định về thanh toán học phí
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Các quy định về thanh toán học phí')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                            data-item-name="Các quy định về thanh toán học phí"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=cac-chuong-trinh-trao-doi-sinh-vien'">
                    6. Các chương trình trao đổi sinh viên quốc tế
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Các chương trình trao đổi sinh viên quốc tế')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                            data-item-name="Các chương trình trao đổi sinh viên quốc tế"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=ky-tuc-xa-sinh-vien'">
                    7. Ký túc xá sinh viên
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Ký túc xá sinh viên')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Ký túc xá sinh viên"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=bao-hiem-y-te'">
                    8. Bảo hiểm Y tế
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Bảo hiểm Y tế')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Bảo hiểm Y tế"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=nghien-cuu-khoa-hoc-sinh-vien'">
                    9. Nghiên cứu khoa học sinh viên
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Nghiên cứu khoa học sinh viên')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Nghiên cứu khoa học sinh viên"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=he-thong-cong-nghe-thong-tin'">
                    10. Hệ thống Công nghệ thông tin
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Hệ thống Công nghệ thông tin')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Hệ thống Công nghệ thông tin"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=khieu-nai-to-cao-kien-nghi-phan-anh'">
                    11. Khiếu nại, tố cáo, kiến nghị phản ánh
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Khiếu nại, tố cáo, kiến nghị phản ánh')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                            data-item-name="Khiếu nại, tố cáo, kiến nghị phản ánh"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=bo-quy-tac-ung-xu'">
                    12. Bộ Quy tắc ửng xử văn hóa học đường Trường đại học Phenikaa
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Bộ Quy tắc ửng xử văn hóa học đường Trường đại học Phenikaa')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                            data-item-name="Bộ Quy tắc ửng xử văn hóa học đường Trường đại học Phenikaa"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Section 2: Phòng Trào Sinh Viên -->
        <div id="section2" class="content-section mb-4" data-content="phòng chào sinh viên" style="display: none;">
            <h2 class="mb-4">Phòng Trào Sinh Viên</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=dang-uy-truong'">
                    1. Đảng ủy Trường
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Đảng ủy Trường')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Đảng ủy Trường"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=doan-thanh-nien'">
                    2. Đoàn thanh niên trường
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Đoàn thanh niên trường')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Đoàn thanh niên trường"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=phong-trao-sinh-vien'">
                    3. Phong trào sinh viên 5 tốt
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Phong trào sinh viên 5 tốt')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Phong trào sinh viên 5 tốt"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=hoat-dong-cau-lac-bo'">
                    4. Hoạt động Câu lạc bộ sinh viên
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Hoạt động Câu lạc bộ sinh viên')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Hoạt động Câu lạc bộ sinh viên"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=phong-trao-the-duc-the-thao'">
                    5. Phong trào thể dục thể thao
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Phong trào thể dục thể thao')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Phong trào thể dục thể thao"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=danh-hieu'">
                    6. Các danh hiệu thi đua
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Các danh hiệu thi đua')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Các danh hiệu thi đua"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Section 3: 1001 Cách Để Thành Công -->
        <div id="section3" class="content-section mb-4" data-content="1001 cách thành công" style="display: none;">
            <h2 class="mb-4">1001 Cách Để Thành Công</h2>

            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=hoc-tap-thanh-cong'">
                    1. Làm thế nào để để học tập thành công ở trường Đại học ?
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Làm thế nào để để học tập thành công ở trường Đại học')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                            data-item-name="Làm thế nào để để học tập thành công ở trường Đại học"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=goc-ban-be'">
                    2. Góc bạn bè và tình yêu
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Góc bạn bè và tình yêu')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Góc bạn bè và tình yêu"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=vui-choi'">
                    3. Ăn và chơi
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="event.stopPropagation(); setEditContent('Ăn và chơi')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Ăn và chơi"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=di-chuyen'">
                    4. Di chuyển
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="event.stopPropagation(); setEditContent('Di chuyển')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Di chuyển"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"
                    onclick="window.location.href='./content-page.php?section=hoat-dong'">
                    5. Hoạt động ngoại khóa
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('Hoạt động ngoại khóa')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Hoạt động ngoại khóa"
                            onclick="event.stopPropagation(); openDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Chỉnh Sửa Nội Dung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <!-- Edit Title Field -->
                        <div class="mb-3">
                            <label for="editTitle" class="form-label">Tiêu Đề</label>
                            <input type="text" class="form-control" id="editTitle" required>
                        </div>
                        <!-- Edit Content Field -->
                        <div class="mb-3">
                            <label for="editContent" class="form-label">Nội Dung</label>
                            <input type="text" class="form-control" id="editContent" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="saveChanges">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirm Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"> <!-- Giữ lớp này để căn giữa theo chiều dọc -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Xác Nhận Xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa nội dung này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy Bỏ</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Xóa</button>
                </div>
            </div>
        </div>
    </div>


    <script src="./index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>