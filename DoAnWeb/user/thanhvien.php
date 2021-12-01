<?php
    require "header.php";
    require "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thành Viên</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="../js/phantrang.js"></script>
    <link rel="stylesheet" href="../css/phantrang.css">
    <style>
    	.avatar img{
    		width: 250px;
    		height: auto;
    		border-radius: 50%;
    	}
    	.sidebar ul {
		  	list-style-type: none;
		  	margin: 0;
		  	padding: 0;
		}
    	.sidebar li{
			padding: 8px;
  			margin-bottom: 7px;
  			background-color: #B33026;
  			color: white;
  			cursor: pointer;
  			border-radius: 10px;
  			text-align: center;
    	}
    	.sidebar li a{
    		color: white;
    	} 
    	.thanhvien{
    		margin-bottom: 100px;
    	}
    </style>
</head>
<body>
	<div class="thanhvien">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-12 wrapper">
				<ul class="sidebar">
					<h3>TÀI KHOẢN CGV</h3>
	  				<li><a href="?mod=info">Thông tin khách hàng</a></li>
	  				<li><a href="?mod=edit">Thay đổi thông tin</a></li>
	  				<li><a href="?mod=history">Lịch sử đặt vé</a></li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-12 avatar">
				<img src="../images/avatar.png">
			</div>
			<div class="col-lg-6 col-md-4 col-sm-12">
			<?php
				$email=$_SESSION['email'];
				if(isset($_GET["mod"]) && $_GET["mod"]=="info"){			 
					$stmt=$conn->prepare("select * from user where email=?");
					$stmt->bind_param("s",$email);
					$stmt->execute();
					$result = $stmt->get_result();
					$row=$result->fetch_assoc();
			?>	
				<table class="table table-hover table-responsive">
					<tr>
						<th>Họ tên</th>
						<td><?= $row["hoten"]?></td>
					</tr>
					<tr>
						<th>Ngày sinh</th>
						<td><?= date("d-m-Y", strtotime($row["ngaysinh"]))?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?= $row["email"]?></td>
					</tr>
					<tr>
						<th>Giới tính</th>
						<td><?= $row["gioitinh"]?></td>
					</tr>
					<tr>
						<th>Số điện thoại</th>
						<td><?= $row["sdt"]?></td>
					</tr>
					<tr>
						<th>Tỉnh/Thành phố</th>
						<td><?= $row["tinhtp"]?></td>
					</tr>
				</table>
			<?php
				}
				else if(isset($_GET["mod"]) && $_GET["mod"]=="edit"){
					echo "<script>window.location='edit-info.php'</script>";
				}
				else {
					$stmt=$conn->prepare("select * from history where email=?");
				  	$stmt->bind_param("s",$email);
				  	$stmt->execute();
				 	$result = $stmt->get_result();
				  	$row=$result->fetch_assoc();
			?>
					
					<table class="table table-hover">
						<thead>
							<th>Tên Phim</th>
							<th>Tên Rạp</th>
							<th>Ngày Mua Vé</th>
							<th>Giờ Chiếu</th>
							<th>Tổng Tiền</th>
						</thead>
						<tbody>
							<?php 
								$stmt=$conn->prepare("select * from history");
								$stmt->execute();
				      			$result = $stmt->get_result();
				      			if (mysqli_num_rows($result) > 0) {
				        			while($row=$result->fetch_assoc()) {
							?>
							<tr class="tr">
								<td><?= $row["ten_film"]?></td>
								<td><?= $row["tenrap"]?></td>
								<td><?= date("d-m-Y", strtotime($row["ngaymuave"]))?></td>
								<td><?= $row["gio_chieu"]?></td>
								<td><?= $row["tongtien"]?></td>
							</tr>
				<?php 
						}
					}
				?>
						</tbody>
					</table>
					<div class="pagination">
						<ul class="page_numbers">
						</ul>
					</div>	
			<?php
				}
			?>
			</div>
		</div>
	</div>	
    <?php
	    require "../footer.php";
	?>
</body>
</html>