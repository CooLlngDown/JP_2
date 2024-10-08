<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập kế hoạch học tập cá nhân</title>
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
                <span class="search-icon" onclick="performSearch()">🔍</span>
            </div>
        </div>
    </nav>

    <?php
    session_start();
    include("../connect.php"); // Kết nối đến cơ sở dữ liệu
    
    // Truy vấn để lấy tiêu đề và nội dung từ bảng quyche có quyche_id = 1
    $stmt = $conn->prepare("SELECT title, description FROM success WHERE success_id = ?");
    $stmt->bind_param("i", $quyche_id); // Liên kết biến quyche_id
    $quyche_id = 1; // Giá trị quyche_id mà bạn muốn lấy
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $title = $row['title']; // Lấy tiêu đề
    $description = $row['description']; // Lấy nội dung
    
    $stmt->close();
    $conn->close();
    ?>


    <div class="container">
        <?php echo $title; ?><br><br>


        <div class="page active" id="page1">
            <?php echo $description; ?>
        </div>
    </div>



</body>

</html>