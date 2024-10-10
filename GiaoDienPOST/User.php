<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Tài Khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./Assets/css/UserForm.css">
    <link rel="stylesheet" href="../styleChatbox.css">
</head>

<body>
    <!-- Header with Title and Create Post Button -->
    <header class="bg-primary text-white p-4">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="../home_admin.php"><img src="./Assets/img-logo/Logo-DH-Phenikaa-V-Bl.webp" alt="Logo"
                        class="logo me-2"></a>
                <h1 class="mb-0">Quản lý Tài Khoản</h1>
            </div>
            <div class="search-box">
                <input type="text" class="input-search" id="globalSearch" placeholder="Điền từ khóa tìm kiếm">
                <button class="btn-search" id="searchButton"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </header>

    <table id="example" class="table table-striped table-bordered mt-4" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>UserId</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th style="text-align:center;width:100px;">Add row
                    <a href="FormAdd.php"><button type="button" data-func="dt-add"
                            class="btn btn-success btn-xs dt-add">
                            <i class="fa-solid fa-user-plus"></i>
                        </button></a>
                </th>
            </tr>
        </thead>

        <script>
            document.getElementById('searchButton').addEventListener('click', function () {
                // Lấy giá trị từ ô tìm kiếm
                var keyword = document.getElementById('globalSearch').value;

                // Chuyển hướng với từ khóa tìm kiếm
                var url = 'User.php?keyword=' + encodeURIComponent(keyword);
                window.location.href = url;
            });
        </script>

        <tbody>
            <?php
            session_start();
            include("../connect.php"); // Kết nối cơ sở dữ liệu
            
            // Lấy từ khóa tìm kiếm nếu có
            $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

            // Tạo câu truy vấn cơ sở dữ liệu
            $query = "SELECT user_id, name, email, password FROM users";
            if (!empty($keyword)) {
                // Nếu có từ khóa, thêm điều kiện tìm kiếm
                $query .= " WHERE user_id LIKE ? OR name LIKE ? OR email LIKE ?";
            }

            $stmt = $conn->prepare($query);

            if (!empty($keyword)) {
                // Gắn từ khóa tìm kiếm vào câu truy vấn
                $likeKeyword = '%' . $keyword . '%';
                $stmt->bind_param("sss", $likeKeyword, $likeKeyword, $likeKeyword);
            }

            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0):
                // Hiển thị kết quả tìm kiếm
                $users = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($users as $index => $user):
                    ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($user['user_id']) ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['password']) ?></td>
                        <td>
                            <a href="update_user.php?user_id=<?= htmlspecialchars($user['user_id']) ?>&name=<?= htmlspecialchars($user['name']) ?>&email=<?= htmlspecialchars($user['email']) ?>&password=<?= htmlspecialchars($user['password']) ?>"
                                class="btn btn-sm btn-outline-success me-2">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </a>
                            <a href="delete_user.php?user_id=<?= htmlspecialchars($user['user_id']) ?>"
                                class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?');">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;
            else:
                echo "<p>Không tìm thấy kết quả phù hợp.</p>";
            endif;

            $stmt->close();
            $conn->close();
            ?>
        </tbody>
    </table>

    </table>

    <!-- Modal Xác nhận Xóa -->
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>