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
                        <a class="big" href="PostQuyche.php">Quy Chế-Quy Định</a>
                    </li>
                    <li class="nav-item">
                        <a class="big" href="PostPhongtrao.php">Phòng Trào Sinh Viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="big" href="PostThanhcong.php">1001 Cách Để Thành Công</a>
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
            <input type="date" id="searchDate" class="form-control" aria-label="Chọn ngày">
            <button class="btn btn-outline-secondary" type="button" id="searchButton">Tìm kiếm</button>
        </div>

        <script>
            document.getElementById('searchButton').addEventListener('click', function () {
                // Lấy giá trị từ các trường input
                var keyword = document.getElementById('globalSearch').value;
                var searchDate = document.getElementById('searchDate').value;

                // Chuyển hướng trang với query string để gửi đến server
                var url = 'PostPhongtrao.php?keyword=' + encodeURIComponent(keyword) + '&date=' + encodeURIComponent(searchDate);
                window.location.href = url;
            });
        </script>

        <!-- Section 1: Phong Trào Sinh Viên -->
        <div id="section1" class="content-section mb-4" data-content="phong trào sinh viên">
            <?php
            // Kết nối cơ sở dữ liệu
            include("../connect.php");

            // Truy vấn lấy dữ liệu từ bảng mucluc
            $query = "SELECT mucluc_id, title FROM mucluc";
            $result = $conn->query($query);

            // Kiểm tra nếu có dữ liệu trả về
            if ($result->num_rows > 0):
                ?>
                <h1 class="mb-4">Phong Trào Sinh Viên</h1>


                <?php
            else:
                echo "<p>Không có dữ liệu.</p>";
            endif;
            ?>

            <?php

            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
            $searchDate = isset($_GET['date']) ? $_GET['date'] : '';

            // Tạo câu truy vấn SQL
            $query = "SELECT mucluc_id, title, created_at FROM mucluc WHERE 1 = 1";

            // Kiểm tra nếu có từ khóa tìm kiếm
            if (!empty($keyword)) {
                $query .= " AND title LIKE ?";
            }

            // Kiểm tra nếu có ngày tìm kiếm
            if (!empty($searchDate)) {
                $query .= " AND DATE(created_at) = ?";
            }

            $stmt = $conn->prepare($query);

            // Bind các tham số vào câu truy vấn
            if (!empty($keyword) && !empty($searchDate)) {
                $likeKeyword = '%' . $keyword . '%';
                $stmt->bind_param("ss", $likeKeyword, $searchDate);
            } elseif (!empty($keyword)) {
                $likeKeyword = '%' . $keyword . '%';
                $stmt->bind_param("s", $likeKeyword);
            } elseif (!empty($searchDate)) {
                $stmt->bind_param("s", $searchDate);
            }

            // Thực thi truy vấn
            $stmt->execute();
            $result = $stmt->get_result();

            // Kiểm tra nếu có dữ liệu trả về
            if ($result->num_rows > 0):
                ?>
                <ul class="list-group">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo $row['title']; ?>
                            <span class="text-muted"><?php echo $row['created_at']; ?></span>
                            <div>
                                <a href="UpdatePhongtrao.php?mucluc_id=<?php echo $row['mucluc_id']; ?>"
                                    class="btn btn-sm btn-outline-success me-2">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                </a>
                                <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-id="<?php echo $row['mucluc_id']; ?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php
            else:
                echo "<p>Không có dữ liệu.</p>";
            endif;

            ?>

            <!-- Confirm Delete Modal -->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
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
                            <form id="deleteForm" method="POST" action="PostPhongtrao.php">
                                <input type="hidden" name="mucluc_id" id="mucluc_id" value="">
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            // Xử lý khi form được gửi đi
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mucluc_id'])) {
                $mucluc_id = $_POST['mucluc_id'];

                // Kết nối lại cơ sở dữ liệu
                include("../connect.php");

                // Xử lý xóa bản ghi trong cơ sở dữ liệu
                $deleteQuery = "DELETE FROM mucluc WHERE mucluc_id = ?";
                $stmt = $conn->prepare($deleteQuery);
                $stmt->bind_param("i", $mucluc_id);

                if ($stmt->execute()) {
                    // Xóa thành công, chuyển hướng lại với thông báo
                    echo "<script>alert('Xóa thành công'); window.location.href='PostPhongtrao.php';</script>";
                    exit;
                } else {
                    // Xóa thất bại
                    echo "<script>alert('Lỗi, xóa thất bại');</script>";
                }

                $stmt->close();
                $conn->close();
            }
            ?>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var deleteModal = document.getElementById('deleteModal');
                    deleteModal.addEventListener('show.bs.modal', function (event) {
                        var button = event.relatedTarget;
                        var muclucId = button.getAttribute('data-id');
                        var inputMuclucId = deleteModal.querySelector('#mucluc_id');
                        inputMuclucId.value = muclucId;
                    });
                });
            </script>

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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>