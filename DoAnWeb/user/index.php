<?php
    require "header.php";
    require "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trang Chủ</title>
</head>
<body>
    <style>
        .banner-image{
            height: 450px;
            border-radius: 5px;
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #movie{
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .title-name{
            margin: 20px;
        }
        .title-name h1{
            font-size: 48px;
            font-weight: bold;
            text-align: center;
        }
        .alert{
            text-align: center;
        }
    </style>
    <script>
        $(document).ready(function(){
                $(".alert").fadeOut(3000);
        })
    </script>
    <div class="container">
        <?php 
            if(!empty($_SESSION['msg'])){
                echo"<div class='alert alert-info msg'><strong>".$_SESSION['msg']."</strong></div>";
            }
            $_SESSION['msg']="";
        ?>
        <div class="banner">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="banner-image"><img src="../images/img1.jpg"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="banner-image"><img src="../images/img2.jpg"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="banner-image"><img src="../images/img3.jpg"></div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            <div class="clearfix visible-xs"></div>
            </div>
        </div>
        <div class="title-name"><h1>MOVIE SELECTION</h1></div>
    </div>
    <?php 
        include("movie-selection.php");
        include ("../footer.php");
    ?>
</body>
</html>