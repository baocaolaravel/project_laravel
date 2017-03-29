<?php
if (isset($_POST["txtname"])) {// kiểm tra nếu người dùng đã ấn nút Đăng ký để gửi thông tin
 
	$name = $_POST["txtname"]; // lấy thông tin username
 
	$email = $_POST["txtEmail"]; // lấy thông tin password
 
	$telno = $_POST["txtTelno"]; // lấy thông tin email
 
	$address = $_POST["txtAddress"]; // lấy thông tin sex
 
	$content = $_POST["txtContent"]; // lấy thông tin age
 
 
	echo $name . " | " .$email . " | " .$telno . " | " .$address . " | " .$content; // xuất dữ liệu lấy được ra cho phía server
	
	
}
?>