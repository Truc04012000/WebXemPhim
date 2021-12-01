<?php
   	require "header.php";
    include '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rạp</title>
    <link rel="stylesheet" type="text/css" href="../css/rap.css">
</head>
<body>
    <div class="container cinemas">
        <div class="title">
    	   <h1>CGV CINEMAS</h1>
        </div>
    	<hr class="hr">
    	<div class="row">
    <?php

    $result = mysqli_query($conn, "SELECT * FROM rap GROUP BY tinh_tp");
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $tinh=$row["tinh_tp"];
            ?>
            	<div class="col-lg-3 col-md-3 col-sm-6"><a class="tinh" href='?tinh=<?=$tinh?>'><?=$tinh?></a></div>
            <?php
        }
    } 
    else {
        echo "0 results";
    }
    ?>
    	</div>
    	<hr class="hr">
    	<div class="row">
	    
    <?php
    $tinh="Hồ Chí Minh";
    if(isset($_GET["tinh"])){
    	$tinh=$_GET["tinh"];
    }
    $stmt=$conn->prepare("SELECT ten_rap FROM rap WHERE tinh_tp=?");
    $stmt->bind_param("s",$tinh);
    $stmt->execute();
    $result = $stmt->get_result();
    if (mysqli_num_rows($result) > 0) {
        while($row=$result->fetch_assoc()) {
    ?>
    	<div class="col-lg-3 col-md-3 col-sm-6 tenrap"><?=$row["ten_rap"]?></div>
    <?php
		}
	}
?>
		</div>
	</div>
    <?php
        require "../footer.php";
    ?>
</body>
</html>