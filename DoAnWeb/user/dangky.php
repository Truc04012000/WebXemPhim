<?php
    require("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Ký</title>
</head>
<body>
<style>
    form{
        max-width: 400px;
        margin: auto;
    }
    em{
        color: red;
    }
</style>
    <form method="POST">
        <center><h2>ĐĂNG KÝ</h2></center>
        <div class="form-group">
            <label >Họ tên: <em>*</em></label>
            <input type="text" class="form-control" id="hoten" placeholder="Vui lòng nhập tên đăng nhập" name="hoten">
        </div>
        <div class="form-group">
            <label >Số điện thoại: <em>*</em></label>
            <input type="text" class="form-control" id="sdt" placeholder="Vui lòng nhập số điện thoại" name="sdt">
        </div>
        <div class="form-group">
            <label >Email: <em>*</em></label>
            <input type="email" class="form-control" id="email" placeholder="Vui lòng nhập email" name="email">
        </div>
        <div class="form-group">
            <label >Mật khẩu: <em>*</em></label>
            <input type="password" class="form-control" id="matkhau" placeholder="Vui lòng nhập mật khẩu" name="matkhau">
        </div>
        <div class="form-group">
            <label >Ngày sinh: <em>*</em></label>
            <input type="date" class="form-control" id="ngaysinh" placeholder="Vui lòng nhập ngày sinh" name="ngaysinh">
        </div>
		<div class="form-group">
            <label >Giới tính: <em>*</em></label>
            <select name="gioitinh" id="gioitinh">
                <option></option>   
                <option>Nam</option>    
                <option>Nữ</option>
                <option>Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tinhtp">Tỉnh/Thành phố:<em>*</em></label>
            <input type="text" class="form-control" id="tinhtp" placeholder="Vui lòng nhập tỉnh/thành phố" name="tinhtp">
        </div>
        <button type="submit" class="btn btn-danger" name = "dangky">Đăng ký</button><br><br>
		<p>Đã có tài khoản? <a href='dangnhap.php'>Đăng nhập ngay</a></p>
	</form>
<br>
<?php
    include("re.php");
    require("../footer.php");
?>
</body>
</html>
