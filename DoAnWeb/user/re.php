<?php
	include'../config.php';
	if (isset($_POST['dangky']) && $_POST["hoten"] !='' && $_POST["ngaysinh"] !='' && $_POST["email"] !='' && $_POST["matkhau"] !='' && $_POST["tinhtp"] !='' && $_POST["gioitinh"] !='' && $_POST["sdt"] !='') 
    {
        $hoten = $_POST["hoten"];
        $sdt = $_POST["sdt"];
        $email = $_POST["email"];
        $matkhau = $_POST["matkhau"];
        $ngaysinh = $_POST["ngaysinh"];
        $gioitinh = $_POST["gioitinh"];
        $tinhtp = $_POST["tinhtp"];
        $sql="SELECT * FROM user WHERE email='$email' ";
        $old= mysqli_query ($conn,$sql);

        if (mysqli_num_rows($old)>0) {
            header("location:dangky.php");
        }
        $sql="INSERT INTO user VALUES ('$hoten','$sdt','$email','$matkhau','$ngaysinh','$gioitinh','$tinhtp')";
        $result = mysqli_query($conn,$sql);
        if (!$result) {
            echo("Error description: " . mysqli_error($conn));
        }    
        echo '<script>window.location="dangnhap.php"</script>';
    }
?>