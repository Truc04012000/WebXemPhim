<?php require("header_admin.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
	<center><h3>LỊCH SỬ ĐẶT VÉ</h3></center>
	<div class="container">
		<table class="table table-responsive table-hover">
			<thead>
				<th>Email</th>
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
					<td><?= $row["email"]?></td>
					<td><?= $row["ten_film"]?></td>
					<td><?= $row["tenrap"]?></td>
					<td><?= date("d-m-Y", strtotime($row["ngaymuave"]))?></td>
					<td><?= $row["gio_chieu"]?></td>
					<td><?= $row["tongtien"]?></td>
				</tr>
				<?php 
						}
					}
					$stmt=$conn->prepare("SELECT SUM(tongtien) AS 'doanhthu' FROM history");
					$stmt->execute();
	      			$stmt = $stmt->get_result();
	      			$row=$stmt->fetch_assoc();
				?>
				<tr class="control" style="text-align: right; font-weight: bold; font-size: 17px">
			        <td colspan="6">
			            <p>Doanh thu: <?=$row['doanhthu']?></p>
			        </td>
		    	</tr>
			</tbody>
		</table>
		<div class="pagination">
			<ul class="page_numbers">
			</ul>
		</div>	
	</div>
	<?php require("../footer.php") ?>
</body>
</html>
	