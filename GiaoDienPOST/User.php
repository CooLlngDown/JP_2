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
                <input type="text" class="input-search" placeholder="Type to Search...">
                <button class="btn-search"><i class="fas fa-search"></i></button>
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
                    <button type="button" data-func="dt-add" class="btn btn-success btn-xs dt-add">
                        <i class="fa-solid fa-user-plus"></i>
                    </button>
                </th>
            </tr>
        </thead>
        <?php
        session_start();
        include("../connect.php"); // Kết nối đến cơ sở dữ liệu
        
        // Truy vấn để lấy danh sách người dùng từ bảng users
        $stmt = $conn->prepare("SELECT user_id, name, email, password FROM users");
        $stmt->execute();
        $result = $stmt->get_result();
        $users = [];

        // Lưu dữ liệu vào mảng
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }

        ?>

        <tbody>
            <?php foreach ($users as $index => $user): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($user['user_id']) ?></td>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['password']) ?></td>
                    <td>
                        <button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            onclick="event.stopPropagation(); setEditContent('<?= htmlspecialchars($user['name']) ?>', '<?= htmlspecialchars($user['user_id']) ?>', '<?= htmlspecialchars($user['email']) ?>')">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-danger"
                            data-item-name="<?= htmlspecialchars($user['name']) ?>"
                            onclick="event.stopPropagation(); currentDeleteRow = this.parentElement.parentElement; openDeleteModal()">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    <!-- Modal Chỉnh sửa -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $user_id = htmlspecialchars($_POST['user_id']);
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars($_POST['pass']);

        $stmt = $conn->prepare("UPDATE users SET name = ?, password = ? WHERE user_id = ?");
        $stmt->bind_param("sss", $name, $pass, $user_id);

        if ($stmt->execute()) {
            echo "Cập nhật thông tin thành công";
        } else {
            echo "Lỗi, cập nhật chưa thành công: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }
    ?>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Chỉnh sửa Thông tin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Tên</label>
                            <input type="text" class="form-control" id="editName" name="name"
                                value="<?= htmlspecialchars($user['name']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="editUserId" class="form-label">UserId</label>
                            <input type="text" class="form-control" id="editUserId" name="user_id"
                                value="<?= htmlspecialchars($user['user_id']) ?>" readonly required>
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" name="email"
                                value="<?= htmlspecialchars($user['email']) ?>" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="editPass" class="form-label">Password</label>
                            <input type="text" class="form-control" id="editPass" name="pass"
                                value="<?= htmlspecialchars($user['password']) ?>" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary" form="editForm">Lưu</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Thêm Người Dùng -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Thêm Người Dùng Mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addUserForm">
                        <div class="mb-3">
                            <label for="addName" class="form-label">Tên</label>
                            <input type="text" class="form-control" id="addName" required>
                        </div>
                        <div class="mb-3">
                            <label for="addUserId" class="form-label">UserId</label>
                            <input type="text" class="form-control" id="addUserId" required>
                        </div>
                        <div class="mb-3">
                            <label for="addEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="addEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="addPassword" class="form-label">Mật Khẩu</label>
                            <input type="password" class="form-control" id="addPassword" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="saveUserButton">Lưu</button>
                </div>
            </div>
        </div>
    </div>


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

    <script>
        $(document).ready(function () {
            // Khởi tạo DataTable
            var table = $('#example').DataTable({
                "paging": false,
                "autoWidth": true,
                "columnDefs": [
                    { "orderable": false, "targets": 5 } // Tắt sắp xếp cho cột hành động
                ]
            });

            let currentDeleteRow = null;

            // Sự kiện nút thêm người dùng
            $('.dt-add').on('click', function () {
                $('#addUserForm')[0].reset();
                $('#addUserModal').modal('show');
            });

            // Lưu người dùng mới
            $('#saveUserButton').on('click', function () {
                var userName = $('#addName').val();
                var userId = $('#addUserId').val();
                var userEmail = $('#addEmail').val();
                var userPassword = $('#addPassword').val();

                var rowData = [
                    table.rows().count() + 1,
                    userId,
                    userName,
                    userEmail,
                    userPassword,
                    `<button class="btn btn-sm btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#editModal" 
                    onclick="setEditContent('${userName}', '${userId}', '${userEmail}')"><i class="fa-solid fa-screwdriver-wrench"></i></button>
                 <button class="btn btn-sm btn-outline-danger dt-delete" onclick="openDeleteModal(this)"><i class="fa-solid fa-trash"></i></button>`
                ];

                table.row.add(rowData).draw(false);
                $('#addUserModal').modal('hide');
                rebindEvents();
            });

            // Hàm gán lại sự kiện cho nút xóa
            function rebindEvents() {
                $('.dt-delete').off('click').on('click', function () {
                    currentDeleteRow = $(this).parents('tr');
                    $('#deleteModal').modal('show');
                });
            }

            // Xác nhận xóa
            $('#confirmDelete').on('click', function () {
                if (currentDeleteRow) {
                    table.row(currentDeleteRow).remove().draw(false);
                    $('#deleteModal').modal('hide');
                    currentDeleteRow = null;
                }
            });
        });

        // Lưu thay đổi
        function saveChanges() {
            console.log("Changes saved");
        }

    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>