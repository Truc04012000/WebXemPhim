<?php
    require("header.php");
    require("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Nhập</title>
</head>
<body>

    <style>
        
        form{
            max-width: 400px;
            margin: auto;
        }
        
    </style>
    <script>
        function checkInput(){
            var email= document.getElementById('email');
            var matkhau= document.getElementById('matkhau');
            var error=document.getElementById('error');
            if(email.value===""){
                error.innerHTML='Bạn chưa nhập tài khoản';
                email.focus();
                return false;
                }
            else if(matkhau.value===""){
                error.innerHTML='Bạn chưa nhập mật khẩu';
                matkhau.focus();
                return false;
            }
            error.innerHTML="";
            return true;
        }
    </script>
    
    <div class="container">
        <form method="POST" onsubmit="return checkInput()">
            <center><h2>ĐĂNG NHẬP</h2></center>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập email" name="email">
            </div>
            <div class="form-group">
                <label>Mật khẩu:</label>
                <input type="password" class="form-control" id="matkhau" placeholder="Mật khẩu" name="matkhau">
            </div>
            <button type="submit" name="dangnhap" class="btn btn-danger">Đăng nhập</button><br><br>
            <p style="color:red;"id="error"></p>
    		<p>Bạn chưa có tài khoản? <a href='dangky.php'>Đăng ký ngay</a></p>
    	</form>
        <?php
            extract($_POST);
            if (isset($_POST["dangnhap"]) and isset($email) and isset($matkhau)) {  
                $sql="SELECT * FROM user WHERE email='$email' AND matkhau='$matkhau' ";
                $user = mysqli_query ($conn,$sql);
                $_SESSION['email']=$email;
                if (mysqli_num_rows($user) >0) {
                    echo "<script>window.location='index.php'</script>";
                }
                else{
                    echo "
                    <script>
                        error.innerHTML='Sai email hoặc mật khẩu';
                    </script>";     
                }
            }
		    require("../footer.php");
		?>
    </div>
</body>
</html>
