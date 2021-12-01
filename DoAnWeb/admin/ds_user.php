<?php require("header_admin.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<style>
		button{
			float: left;
		}
	</style>
</head>
<body>
	<center><h3>DANH SÁCH USER</h3></center>
	<div class="container">
		<table class="table table-responsive table-hover">
			<thead>
				<th>Họ Tên</th>
				<th>Số Điện Thoại</th>
				<th>Email</th>
				<th>Mật Khẩu</th>
				<th>Ngày Sinh</th>
				<th>Giới tính</th>
				<th>Tỉnh/Thành Phố</th>
				<th colspan="2">Thao Tác</th>
			</thead>
			<tbody>
				<?php 
					$stmt=$conn->prepare("select * from user");
					$stmt->execute();
	      			$result = $stmt->get_result();
	      			if (mysqli_num_rows($result) > 0) {
	        			while($row=$result->fetch_assoc()) {
				?>
				<tr class="tr">
					<td><?=$row['hoten']?></td>
					<td><?= $row["sdt"]?></td>
					<td><?= $row["email"]?></td>
					<td><?= $row["matkhau"]?></td>
					<td><?= date("d-m-Y", strtotime($row["ngaysinh"]))?></td>
					<td><?= $row["gioitinh"]?></td>
					<td><?= $row["tinhtp"]?></td>
					<td>
						<form method="post">
							<input type="hidden" value="<?= $row['email']?>" name="email">
							<button class="btn btn-danger" type="submit" name="delete">Xóa</button> 
						</form>
					</td>
					<td>
						<form action="edit_user.php" method="post" >
							<input type="hidden" value="<?= $row['email']?>" name="email">
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
		<div class="pagination">
			<ul class="page_numbers">
			</ul>
		</div>	
	</div>
	<?php
		extract($_POST); 
		if(isset($delete)){
			$stmt=$conn->prepare("Delete FROM user WHERE email=?");
		    $stmt->bind_param("s",$email);
		    $stmt->execute();
		}
	?>
	<?php require("../footer.php") ?>
</body>
</html>
	