<?php require("header_admin.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Phim</title>
</head>
<body>

	<div class="container">
		<?php  
			if(isset($_POST["id"])){
				$id=$_POST["id"];
	            $stmt=$conn->prepare("select * from film where id=?");
	            $stmt->bind_param("i",$id);
	            $stmt->execute();
	            $result = $stmt->get_result();
	            $row=$result->fetch_assoc();
	        }
        ?>
		<center><h3>Sửa Phim</h3></center>
		<form method="post">
			<input type="hidden" value="<?=$id?>" name="id">
			<div class="form-group">
	            <label >Tên Phim: </label>
	            <input type="text" class="form-control" id="ten_film" name="ten_film" value="<?=$row['ten_film']?>">
	        </div>
			<div class="form-group">
	            <label >Đạo Diễn: </label>
	            <input type="text" class="form-control" id="daodien" name="daodien" value="<?=$row['daodien']?>">
	        </div>
			<div class="form-group">
	            <label >Diễn Viên: </label>
	            <input type="text" class="form-control" id="dienvien" name="dienvien" value="<?=$row['dienvien']?>">
	        </div>
	        <div class="form-group">
	            <label >Thể Loại: </label>
	            <input type="text" class="form-control" id="theloai" name="theloai" value="<?=$row['theloai']?>">
	        </div>
	        <div class="form-group">
	            <label >Khởi Chiếu: </label>
	            <input type="text" class="form-control" id="khoichieu" name="khoichieu" value="<?=$row['khoichieu']?>">
	        </div>
			<div class="form-group">
	            <label >Thời lượng: </label>
	            <input type="text" class="form-control" id="thoiluong" name="thoiluong" value="<?=$row['thoiluong']?>">
	        </div>
	        <div class="form-group">
	            <label >Ngôn ngữ: </label>
	            <input type="text" class="form-control" id="ngonngu" name="ngonngu" value="<?=$row['ngonngu']?>">
	        </div>
	        <div class="form-group">
	            <label >Rated: </label>
	            <input type="text" class="form-control" id="rated" name="rated" value="<?=$row['rated']?>">
	        </div>
	        <div class="form-group">
	            <label >Hình Ảnh: </label>
	            <input type="text" class="form-control" id="images" name="images" value="<?=$row['images']?>">
	        </div>
	        <div class="form-group">
	            <label >Giới Thiệu: </label>
	            <input type="text" class="form-control" id="gioithieu" name="gioithieu" value="<?=$row['gioithieu']?>">
	        </div>
	        <div class="form-group">
	            <label >Trailer: </label>
	            <input type="text" class="form-control" id="trailer" name="trailer" value="<?=$row['trailer']?>">
	        </div>
	        <div class="form-group">
	        	<input type="radio" id="dangchieu" name="trangthai" value="Đang Chiếu">
	            <label for="dangchieu" >Đang Chiếu | </label>
	            <input type="radio" id="sapchieu" name="trangthai" value="Sắp Chiếu">
				<label for="sapchieu">Sắp Chiếu</label><br>				
	        </div>
	        <center><button type="submit" class="btn btn-danger" name = "save">Lưu</button></center>
		</form>
	</div>
	<?php 
		extract($_POST);
		if(isset($id) and isset($save) and isset($ten_film) and isset($daodien) and isset($dienvien) and isset($theloai) and isset($khoichieu) and isset($thoiluong) and isset($ngonngu) and isset($rated) and isset($images) and isset($gioithieu) and isset($trailer) and isset($trangthai)){
	        $edit=$conn->prepare("UPDATE film SET ten_film=?,daodien=?,dienvien=?,theloai=?,khoichieu=?,thoiluong=?,ngonngu=?,rated=?,images=?,gioithieu=?,trailer=?,trangthai=? WHERE id=?");
            $edit->bind_param("ssssssssssssi",$ten_film,$daodien,$dienvien,$theloai,$khoichieu,$thoiluong,$ngonngu,$rated,$images,$gioithieu,$trailer,$trangthai,$id);
            $edit->execute();
            $phim = $edit->get_result();
	        if (isset($save)) {
	        	echo '<script>window.location="index.php"</script>';
	        }    
	        else{
	        	echo("Error description: " . mysqli_error($conn));
	        }
	    }
	?>
</body>
</html>
<?php require("../footer.php") ?>