<?php require("header_admin.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
</head>
<body>
	<div class="container">
		<center><h3>Thêm Phim</h3></center>
		<form method="post">
			<div class="form-group">
	            <label >Tên Phim: </label>
	            <input type="text" class="form-control" id="ten_film" name="ten_film">
	        </div>
			<div class="form-group">
	            <label >Đạo Diễn: </label>
	            <input type="text" class="form-control" id="daodien" name="daodien">
	        </div>
			<div class="form-group">
	            <label >Diễn Viên: </label>
	            <input type="text" class="form-control" id="dienvien" name="dienvien">
	        </div>
	        <div class="form-group">
	            <label >Thể Loại: </label>
	            <input type="text" class="form-control" id="theloai" name="theloai">
	        </div>
	        <div class="form-group">
	            <label >Khởi Chiếu: </label>
	            <input type="date" class="form-control" id="khoichieu" name="khoichieu">
	        </div>
			<div class="form-group">
	            <label >Thời lượng: </label>
	            <input type="text" class="form-control" id="thoiluong" name="thoiluong">
	        </div>
	        <div class="form-group">
	            <label >Ngôn ngữ: </label>
	            <input type="text" class="form-control" id="ngonngu" name="ngonngu">
	        </div>
	        <div class="form-group">
	            <label >Rated: </label>
	            <input type="text" class="form-control" id="rated" name="rated">
	        </div>
	        <div class="form-group">
	            <label >Hình Ảnh: </label>
	            <input type="text" class="form-control" id="images" name="images">
	        </div>
	        <div class="form-group">
	            <label >Giới Thiệu: </label>
	            <input type="text" class="form-control" id="gioithieu" name="gioithieu">
	        </div>
	        <div class="form-group">
	            <label >Trailer: </label>
	            <input type="text" class="form-control" id="trailer" name="trailer">
	        </div>
	        <div class="form-group">
	        	<input type="radio" id="dangchieu" name="trangthai" value="Đang Chiếu">
	            <label for="dangchieu" >Đang Chiếu | </label>
	            <input type="radio" id="sapchieu" name="trangthai" value="Sắp Chiếu">
				<label for="sapchieu">Sắp Chiếu</label><br>				
	        </div>
	        <center><button type="submit" class="btn btn-danger" name = "add">Thêm</button></center>
		</form>
	</div>
	<?php 
		extract($_POST);
		if(isset($add) and isset($ten_film) and isset($daodien) and isset($dienvien) and isset($theloai) and isset($khoichieu) and isset($thoiluong) and isset($ngonngu) and isset($rated) and isset($images) and isset($gioithieu) and isset($trailer) and isset($trangthai)){
			$sql="INSERT INTO film(`ten_film`, `daodien`, `dienvien`, `theloai`, `khoichieu`, `thoiluong`, `ngonngu`, `rated`, `images`, `gioithieu`, `trailer`, `trangthai`)
			VALUES ('$ten_film','$daodien','$dienvien','$theloai','$khoichieu','$thoiluong','$ngonngu','$rated','$images','$gioithieu','$trailer','$trangthai')";
	        $result = mysqli_query($conn,$sql);
	        if (!$result) {
	            echo("Error description: " . mysqli_error($conn));
	        }    
	        else{
	        	echo '<script>window.location="index.php"</script>';
	        }
	    }
	?>
</body>
</html>
<?php require("../footer.php") ?>