<?php
    require ("header.php");
    require ("../config.php");
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
        <center><h2>THAY ĐỔI THÔNG TIN</h2></center>
        <?php  
            $user_email=$_SESSION['email'];
            $stmt=$conn->prepare("select * from user where email=?");
            $stmt->bind_param("s",$user_email);
            $stmt->execute();
            $result = $stmt->get_result();
            $row=$result->fetch_assoc();
        ?>        
        <div class="form-group">
            <label >Họ tên: <em>*</em></label>
            <input type="text" class="form-control" id="hoten" value="<?=$row['hoten']?>" name="hoten">
        </div>
        <div class="form-group">
            <label >Số điện thoại: <em>*</em></label>
            <input type="text" class="form-control" id="sdt" value="<?=$row['sdt']?>" name="sdt">
        </div>
        <div class="form-group">
            <label >Email: <em>*</em></label>
            <input type="email" class="form-control" id="email" value="<?=$row['email']?>" name="email">
        </div>
        <div class="form-group">
            <label >Mật khẩu: <em>*</em></label>
            <input type="password" class="form-control" id="matkhau" value="<?=$row['matkhau']?>" name="matkhau">
        </div>
        <div class="form-group">
            <label >Ngày sinh: <em>*</em></label>
            <input type="date" class="form-control" id="ngaysinh" value="<?=$row['ngaysinh']?>" name="ngaysinh">
        </div>
		<div class="form-group">
            <label >Giới tính: <em>*</em></label>
            <select name="gioitinh" id="gioitinh">
                <option></option>
                <option value="Nam">Nam</option>    
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tinhtp">Tỉnh/Thành phố:<em>*</em></label>
            <input type="text" class="form-control" id="tinhtp" value="<?=$row['tinhtp']?>" name="tinhtp">
        </div>
        <button type="submit" class="btn btn-danger" name = "save">Lưu</button><br><br>
	</form>
<?php
    extract($_POST);
    $email=$_SESSION['email'];
    $edit=$conn->prepare("update user set hoten=?, sdt=?, email=?, matkhau=?, ngaysinh=?, gioitinh=?, tinhtp=? where email=?");
    $edit->bind_param("ssssssss",$hoten, $sdt, $email, $matkhau, $ngaysinh, $gioitinh, $tinhtp, $user_email);
    $edit->execute();
    $result = $edit->get_result();
    if(isset($save)){
         echo '<script>window.location="thanhvien.php?mod=info"</script>';
    }
    require("../footer.php");
?>
</body>
</html>
