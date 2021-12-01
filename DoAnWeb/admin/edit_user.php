<?php
    require ("header_admin.php");
    require ("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Ký</title>
</head>
<body>
    <div class="container">
    <form method="POST">
        <center><h2>SỬA THÔNG TIN</h2></center>
        <?php  
            $email=$_POST['email'];
            $stmt=$conn->prepare("select * from user where email=?");
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $result = $stmt->get_result();
            $row=$result->fetch_assoc();
        ?>        
        <input type="hidden" value="<?=$email?>" name="email">
        <div class="form-group">
            <label >Họ tên: </label>
            <input type="text" class="form-control" id="hoten" value="<?=$row['hoten']?>" name="hoten">
        </div>
        <div class="form-group">
            <label >Số điện thoại: </label>
            <input type="text" class="form-control" id="sdt" value="<?=$row['sdt']?>" name="sdt">
        </div>
        <div class="form-group">
            <label >Email: </label>
            <input type="email" class="form-control" id="email" value="<?=$row['email']?>" name="email">
        </div>
        <div class="form-group">
            <label >Mật khẩu: </label>
            <input type="password" class="form-control" id="matkhau" value="<?=$row['matkhau']?>" name="matkhau">
        </div>
        <div class="form-group">
            <label >Ngày sinh: </label>
            <input type="date" class="form-control" id="ngaysinh" value="<?=$row['ngaysinh']?>" name="ngaysinh">
        </div>
		<div class="form-group">
            <label >Giới tính: </label>
            <select name="gioitinh" id="gioitinh">
                <option></option>
                <option value="Nam">Nam</option>    
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tinhtp">Tỉnh/Thành phố:</label>
            <input type="text" class="form-control" id="tinhtp" value="<?=$row['tinhtp']?>" name="tinhtp">
        </div>
        <button type="submit" class="btn btn-danger" name = "save">Lưu</button><br><br>
	</form>
    </div>
<?php
    extract($_POST);
    if(isset($hoten) and isset($sdt) and isset($matkhau) and isset($ngaysinh) and isset($gioitinh) and isset($tinhtp) and isset($email)){
        $edit=$conn->prepare("update user set hoten=?, sdt=?, matkhau=?, ngaysinh=?, gioitinh=?, tinhtp=? where email=?");
        $edit->bind_param("sssssss",$hoten, $sdt, $matkhau, $ngaysinh, $gioitinh, $tinhtp, $email);
        $edit->execute();
        $result = $edit->get_result();
        if(isset($save)){
             echo '<script>window.location="ds_user.php"</script>';
        }
    }
    
    require("../footer.php");
?>
</body>
</html>
