<?php
    require "header.php";
    require "../config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Phim Sắp Chiếu</title>
  <link rel="stylesheet" href="../css/card.css">
</head>
<body>
  <div class="container">
    <div class="row">
    <?php  
      $stmt=$conn->prepare("select * from film where trangthai='Đang Chiếu'");
      $stmt->execute();
      $result = $stmt->get_result();
      if (mysqli_num_rows($result) > 0) {
        while($row=$result->fetch_assoc()) {
    ?>
      <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6" >
        <div class="item">
          <a href="ndphim.php?id=<?=$row['id']?>">
          <img class="card-img-top" src="<?=$row['images']?>">
        </div>
        <div class="card-body">         
          <h5><a style="color: black" href="ndphim.php?id=<?=$row['id']?>"><?=$row['ten_film']?></a></h5>
          <p> <b>Thể loại: </b><?=$row['theloai']?><br>
          <b>Thời lượng: </b><?=$row['thoiluong']?><br>
          <b>Khởi chiếu: </b><?=date("d-m-Y", strtotime($row['khoichieu']))?></p>
        </div>
        <div class="card-footer"><a style="color:black" href="ndphim.php?id=<?=$row['id']?>"><?php include("ticket.php") ?></a></div>       
      </div>
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
