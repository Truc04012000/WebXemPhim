<?php
    session_start();
    require("../config.php")
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
                    <?php  
                        if(isset($_SESSION['email'])){
                            echo("
                                <li class='nav-item active dropdown'>
                                    <a class='nav-link dropdown-toggle' href='#' id='navbardrop' data-toggle='dropdown'>Phim</a>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='index.php'>Danh Sách Phim</a>
                                        <a class='dropdown-item' href='add_film.php'>Thêm Phim</a>
                                    </div>
                                </li>                           
                                <li class='nav-item active'><a class='nav-link' href='ds_user.php'>Khách Hàng</a></li>
                                <li class='nav-item active'><a class='nav-link' href='history.php'>Lịch Sử Đặt Vé</a></li>
                                <li class='nav-item active'><a class='nav-link' href='dangxuat_admin.php'>Đăng Xuất</a>
                                </li>
                            ");
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>