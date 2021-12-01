<?php
    session_start();
    require("../config.php");
?>
<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/mystyle.css">
    <link rel='Shortcut icon' href='../images/icon-ticket.png' type='image/png'>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger navbar-dark header">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Trang Chủ</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Phim</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="phimdangchieu.php">Phim Đang Chiếu</a>
                            <a class="dropdown-item" href="phimsapchieu.php">Phim Sắp Chiếu</a>
                        </div>
                    </li>
                    <li class="nav-item active"><a class="nav-link" href="rap.php">Rạp</a></li>
                    <?php  
                        if(isset($_SESSION['email'])){
                            $email=$_SESSION['email'];
                            $stmt=$conn->prepare("select hoten from user where email=?");
                            $stmt->bind_param("s",$email);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $row=$result->fetch_assoc();
                            $hoten=$row['hoten'];
                            echo("
                                <li class='nav-item active dropdown'>
                                    <a class='nav-link dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>Xin Chào, $hoten</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='thanhvien.php?mod=info'>Tài Khoản</a>
                                        <a class='dropdown-item' href='dangxuat.php'>Đăng Xuất</a>
                                    </div>
                                </li>");
                        }
                        else{
                            echo("
                                <li class='nav-item active'>
                                    <a class='nav-link' href='dangnhap.php'>Đăng Nhập</a>
                                </li>
                                <li class='nav-item active'>
                                    <a class='nav-link' href='dangky.php'>Đăng Ký</a>
                                </li>");
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>