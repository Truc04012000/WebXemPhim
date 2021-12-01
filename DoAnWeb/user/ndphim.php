<?php 
	require("header.php");
	require("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chi Tiết Phim</title>
	<style>
		.wrap{
			position: relative;
		}
		.play-trailer{
			border: none;
			position: absolute;
      		top: 50%;
      		left: 50%;
      		transform: translate(-50%, -50%);
      		-ms-transform: translate(-50%, -50%);
      		text-align: center;
      		background: none;
      		opacity: 0.8;
      		
		}
		.play-trailer img{
			width: 60px;
			height: 60px;
			border-radius: 50%;
			background-color: white;
			border: 1px solid white;
		}
	</style>
</head>
<body>
	<?php
		include("trailer.php"); 
	?>
	<div class="container">
		<h2>Nội Dung Phim</h2><hr>
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="wrap">
					<img class="poster" src="<?= $row['images']?>">
					<button class="play-trailer" data-toggle="modal" data-target="#myModal">
						<img src="../images/play.png">
					</button>
				</div>
			</div>
			<div class="col-lg-9 col-md-9">
				<h3><?= $row["ten_film"]?></h3>
				<hr>
				<p><b>Đạo diễn: </b><?= $row["daodien"]?></p>
				<p><b>Diễn viên: </b><?= $row["dienvien"]?></p>
				<p><b>Thể loại: </b><?= $row["theloai"]?></p>
				<p><b>Khởi chiếu: </b><?= date("d-m-Y", strtotime($row["khoichieu"]))?></p>
				<p><b>Thời lượng: </b><?= $row["thoiluong"]?></p>
				<p><b>Ngôn ngữ: </b><?= $row["ngonngu"]?></p>
				<p><b>Rated: </b><?= $row["rated"]?></p>
				<p><b>Giới thiệu: </b><?= $row["gioithieu"]?></p>
				<form method="post" action="confirm.php">
					<input type="hidden" name="ten_film" value="<?= $row['ten_film']?>">
					<input type="hidden" name="images" value="<?= $row['images']?>">
					<div class="form-group">
						<select name="ten_rap" class="form-control" >
							<option>Chọn rạp</option>
							<?php
								$stmt=$conn->prepare("SELECT ten_rap FROM rap");						    
							    $stmt->execute();
							    $result = $stmt->get_result();
							    if (mysqli_num_rows($result) > 0) {
							        while($r=$result->fetch_assoc()) {
							?>
										<option><?=$r["ten_rap"]?></option>
							<?php  
									}
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<input type="date" name="ngaymuave" class="form-control">
					</div>
					<div class="form-group">
						<select name="gio_chieu" class="form-control">
							<option>Chọn Suất Chiếu</option>
							<?php
								$stmt=$conn->prepare("SELECT gio_chieu FROM suatchieu");				    
							    $stmt->execute();
							    $result = $stmt->get_result();
							    if (mysqli_num_rows($result) > 0) {
							        while($r=$result->fetch_assoc()) {
							?>
										<option><?=$r["gio_chieu"]?></option>
							<?php  
									}
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="soluong" placeholder="Số Lượng" min="1" max="50">
					</div>
					<?php include("ticket.php") ?>
				</form>
			</div>
		</div>
	<?php
		include("../footer.php");
	?>	
</body>
</html>