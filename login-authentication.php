<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (!isset($_POST["user"]) || !isset($_POST["pass"])) {
		echo "<script>alert('Vui lòng nhập đầy đủ thông tin đăng nhập');window.location='dangnhap.php';</script>";
	} else {
		$user = $_POST["user"];
		$pass = $_POST["pass"];

		// Kiểm tra tài khoản trong bảng Users
		$stmt = $conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
		$stmt->bind_param("ss", $user, $pass);
		$stmt->execute();
		$result = $stmt->get_result();
		$thanhvien = $result->fetch_assoc();
		$n_user = $result->num_rows;
		$stmt->close();

		// Nếu không tìm thấy tài khoản trong Users, kiểm tra trong bảng Admin
		if ($n_user == 0) {
			$stmt = $conn->prepare("SELECT * FROM admin WHERE email=? AND password=?");
			$stmt->bind_param("ss", $user, $pass);
			$stmt->execute();
			$result = $stmt->get_result();
			$admin = $result->fetch_assoc();
			$n_admin = $result->num_rows;
			$stmt->close();

			// Nếu tài khoản là admin
			if ($n_admin > 0) {
				session_start();
				$_SESSION["admin"] = $admin["name"];  // Lưu tên admin vào session
				$_SESSION["success"] = true;
				$_SESSION["user_id"] = $admin["user_id"];  // Lưu user_id vào session
				header("location:home_admin.php");  // Chuyển hướng đến trang admin
				exit();
			} else {
				echo "<script>alert('Thông tin bạn nhập không chính xác!');window.location='dangnhap.php';</script>";
			}
		} else {
			// Nếu tài khoản là user
			session_start();
			$_SESSION["user"] = $thanhvien["name"];  // Lưu tên user vào session
			$_SESSION["success"] = true;
			$_SESSION["user_id"] = $thanhvien["user_id"];  // Lưu user_id vào session
			header("location:home_user.php");  // Chuyển hướng đến trang user
			exit();
		}
	}
} else {
	header("Location: dangnhap.php");
	exit();
}
?>