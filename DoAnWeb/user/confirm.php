<?php 
	require("header.php"); 
	require("../config.php");
	if(!isset($_SESSION["email"])){
		header("location:dangnhap.php");
	}
	$email=$_SESSION["email"];
	extract($_POST);
?>
<style>
	img{
		width: 100%;
		height: auto;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12">
			<img src="<?=$images?>">
		</div>
		<div class="col-lg-9 col-md-9 col-sm-12">
			<table class="table">
				<tr>
					<th>Tên Phim</th>
					<td><?=$ten_film?></td>
				</tr>
				<tr>
					<th>Tên Rạp</th>
					<td><?=$ten_rap?></td>
				</tr>
				<tr>
					<th>Ngày Mua Vé</th>
					<td><?=$ngaymuave?></td>
				</tr>
				<tr>
					<th>Giờ Chiếu</th>
					<td><?=$gio_chieu?></td>
				</tr>
				<tr>
					<th>Tổng Tiền</th>
					<td><?php $tongtien=$soluong*50000; echo $tongtien?></td>
				</tr>
			</table>
			<form method="post">
				<input type="hidden" name="ten_film" value="<?=$ten_film?>">
				<input type="hidden" name="ten_rap" value="<?=$ten_rap?>">
				<input type="hidden" name="ngaymuave" value="<?=$ngaymuave?>">
				<input type="hidden" name="gio_chieu" value="<?=$gio_chieu?>">
				<input type="hidden" name="tongtien" value="<?=$tongtien?>">	
				<button class="btn btn-danger" name="confirm">Xác Nhận Đặt Vé</button>
			</form>
			<?php
				extract($_POST); 
				if(isset($confirm)){
					$stmt=$conn->prepare("INSERT INTO `history`(`email`, `ten_film`, `tenrap`, `ngaymuave`, `gio_chieu`, `tongtien`) VALUES (?,?,?,?,?,?)");
				    $stmt->bind_param("sssssi",$email,$ten_film,$ten_rap,$ngaymuave,$gio_chieu,$tongtien);
				    $stmt->execute();
				    $result = $stmt->get_result();
				    $_SESSION['msg']="Đặt Vé Thành Công";
				    if(isset($_SESSION['msg'])){
				    	echo '<script>window.location="index.php"</script>';
				    }
				}
			?>
		</div>
	</div>
</div>
<?php require("../footer.php"); ?>