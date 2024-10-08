<?php
session_start();
session_destroy(); // Hủy session hiện tại
header("Location: dangnhap.php"); // Điều hướng về trang đăng nhập
exit();
?>