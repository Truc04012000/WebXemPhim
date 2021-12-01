<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <script src="../js/OwlCarousel2-2.3.4/dist/jquery.min.js"></script>
  <script src="../js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .btn {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          border: none;
          cursor: pointer;
          border-radius: 5px;
          text-align: center;
          display: none;
          width: 40%;
          height: 10%;
          color: black;
          background-color: #C0C0C0;
          border: 1px solid white;
        }
        .item{
          width: 260px;
          height: 390px;
        }
        .item img{
          height: 100%;
          width: 100%;
          object-fit: cover;
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="owl-carousel owl-theme">
    <?php 
      $stmt=$conn->prepare("select * from film where trangthai='Đang Chiếu'");
      $stmt->execute();
      $result = $stmt->get_result();
      if (mysqli_num_rows($result) > 0) {
        while($row=$result->fetch_assoc()) {
    ?>
          <div class="item">
            <a href="ndphim.php?id=<?=$row['id']?>">
              <img src="<?=$row['images']?>">
            </a>
            <button onclick="location.href='ndphim.php?id=<?=$row['id']?>'" class="btn" name="btn">MUA VÉ</button>
          </div>
    <?php  
        }
      }
    ?>
    </div>      
  </div>
  <?php include("trailer.php"); ?>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                900:{
                    items:2
                },
                1000:{
                    items:3
                },
                1200:{
                    items:4
                }
            }
        })
    $(".item").hover(function(){
      $(this).toggleClass('active').find(".btn").toggle();
    })
    </script>
</body>
</html>