<?php     
    require("header_admin.php");
    if(!isset($_SESSION['email'])){
        header("location: dangnhap_admin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="../css/phantrang.css">
	<style>
		td {
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		}
	</style>
</head>
<body>
	<center><h3>DANH SÁCH PHIM</h3></center>
	<div class="container">
		<table class="table table-responsive table-hover">
			<thead>
				<th>Tên Phim</th>
				<th>Đạo Diễn</th>
				<th>Diễn Viên</th>
				<th>Thể Loại</th>
				<th>Khởi Chiếu</th>
				<th>Thời lượng</th>
				<th>Ngôn ngữ</th>
				<th>Rated</th>
				<th>Giới Thiệu</th>
				<th>Trạng Thái</th>
				<th colspan="2">Thao Tác</th>
			</thead>
			<tbody>
				<?php 
					$stmt=$conn->prepare("select * from film");
					$stmt->execute();
	      			$result = $stmt->get_result();
	      			if (mysqli_num_rows($result) > 0) {
	        			while($row=$result->fetch_assoc()) {
				?>
				<tr class="tr">
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['ten_film']?>">
						<?=$row['ten_film']?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['daodien']?>">
						<?= $row["daodien"]?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['dienvien']?>">
						<?= $row["dienvien"]?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['theloai']?>">
						<?= $row["theloai"]?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['khoichieu']?>">
						<?= $row["khoichieu"]?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['thoiluong']?>">
						<?= $row["thoiluong"]?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['ngonngu']?>">
						<?= $row["ngonngu"]?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['rated']?>">
						<?= $row["rated"]?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['gioithieu']?>">
						<?= $row["gioithieu"]?></td>
					<td data-toggle="tooltip" data-placement="bottom" title="<?=$row['trangthai']?>">
						<?= $row["trangthai"]?></td>
					<td>
						<form method="post">
							<input type="hidden" value="<?= $row['id']?>" name="id">
							<button class="btn btn-danger" type="submit" name="delete">Xóa</button> 
						</form>
					</td>
					<td>
						<form method="post" action="edit_film.php">
							<input type="hidden" value="<?= $row['id']?>" name="id">
							<button class="btn btn-info" type="submit" name="edit">Sửa</button>
						</form>
					</td>
				</tr>
				<?php 
						}
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="pagination">
		<ul class="page_numbers">
		</ul>
	</div>
	<script>
		$(document).ready(function(){
			$("td").hover(function(){
			  	$('[data-toggle="tooltip"]').tooltip();
			});
		});
	</script>
	<script src="../js/phantrang.js"></script>
	<?php 
		if(isset($_POST["delete"]) and isset($_POST["id"])){
			$id=$_POST["id"];
			$delete=$_POST["delete"];
			$stmt=$conn->prepare("Delete FROM film WHERE id=?");
		    $stmt->bind_param("s",$id);
		    $stmt->execute();
		}
	?>
	<?php require("../footer.php") ?>
</body>
</html>
