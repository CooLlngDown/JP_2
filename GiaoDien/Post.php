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
                        class="logo me-2"></a> <!-- Thêm class logo và margin -->
                <h1 class="mb-0">Quản lý Bài Đăng</h1>
            </div>
            <button class="button type1">
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
                        <a class="nav-link active" aria-current="page" href="#" data-section="section1">Quy Chế - Quy
                            Định</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="section2">Phòng Chào Sinh Viên</a>
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
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 1: Luôn Đặt Mục Tiêu
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 1: Luôn Đặt Mục Tiêu')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 1: Luôn Đặt Mục Tiêu"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 2: Tham Gia Học Tập Liên Tục
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 2: Tham Gia Học Tập Liên Tục')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 2: Tham Gia Học Tập Liên Tục"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 3: Xây Dựng Mối Quan Hệ
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 3: Xây Dựng Mối Quan Hệ')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 3: Xây Dựng Mối Quan Hệ"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Section 2: Phòng Chào Sinh Viên -->
        <div id="section2" class="content-section mb-4" data-content="phòng chào sinh viên" style="display: none;">
            <h2 class="mb-4">Phòng Chào Sinh Viên</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 1: Luôn Đặt Mục Tiêu
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 1: Luôn Đặt Mục Tiêu')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 1: Luôn Đặt Mục Tiêu"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 2: Tham Gia Học Tập Liên Tục
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 2: Tham Gia Học Tập Liên Tục')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 2: Tham Gia Học Tập Liên Tục"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 3: Xây Dựng Mối Quan Hệ
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 3: Xây Dựng Mối Quan Hệ')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 3: Xây Dựng Mối Quan Hệ"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Section 3: 1001 Cách Để Thành Công -->
        <div id="section3" class="content-section mb-4" data-content="1001 cách thành công" style="display: none;">
            <h2 class="mb-4">1001 Cách Để Thành Công</h2>

            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 1: Luôn Đặt Mục Tiêu
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 1: Luôn Đặt Mục Tiêu')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 1: Luôn Đặt Mục Tiêu"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 2: Tham Gia Học Tập Liên Tục
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 2: Tham Gia Học Tập Liên Tục')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 2: Tham Gia Học Tập Liên Tục"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cách 3: Xây Dựng Mối Quan Hệ
                    <div>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal" onclick="setEditContent('Cách 3: Xây Dựng Mối Quan Hệ')"><i
                                class="fa-solid fa-screwdriver-wrench"></i></button>
                        <button class="btn btn-sm btn-outline-danger" data-item-name="Cách 3: Xây Dựng Mối Quan Hệ"
                            onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>
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