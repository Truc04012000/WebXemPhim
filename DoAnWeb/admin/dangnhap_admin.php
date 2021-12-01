<?php
    require("header_admin.php");
    require("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
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
            else if(matkhau.length <6){
                error.innerHTML='Mật khẩu phải dài tối thiểu 6 ký tự';
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
    	</form>
        <?php
            if (isset($_POST["dangnhap"]) && $_POST["email"] !='' && $_POST["matkhau"] !='') {  
                $email=$_POST["email"];
                $password=$_POST["matkhau"];
                $sql="SELECT * FROM admin WHERE email='$email' AND password='$password' ";
                $admin = mysqli_query ($conn,$sql);
                $_SESSION['email']=$email;
                if (mysqli_num_rows($admin) >0) {
                    echo '<script>window.location="index.php"</script>';
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
    <?php require("../footer.php"); ?>
</body>
</html>
