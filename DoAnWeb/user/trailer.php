<?php require("../config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<style>
		.poster{
			width: 100%;
			height: auto;
		}
		.modal .modal-dialog {
		  	max-width: 600px;
		}
		.modal-body{
			text-align: center;
		}
		.modal-body iframe{
			display: inline-block;
		}
	</style>
	<?php

		if(isset($_GET["id"])){
			$id=$_GET["id"];
		}	
		$stmt=$conn->prepare("select * from film where id=?");
		$stmt->bind_param("i",$id);
		$stmt->execute(); 
		$result = $stmt->get_result();
		$row=$result->fetch_assoc();
	?>
	<div class="modal" id="myModal">
	    <div class="modal-dialog modal-dialog-centered">
	      	<div class="modal-content">
		        <div class="modal-header">
		          	<h4 class="modal-title">Movie Trailer</h4>
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
			    </div>
			    <div class="modal-body">
			        <iframe class="youtube-video" width="560" height="315" src="<?= $row['trailer']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			    </div>
		    </div>
	  	</div>
	</div>
	<script>
		$(".close").click(function(){ /*Đóng video youtube khi nhấn vào nút close*/  
			$('.youtube-video').attr('src', $('iframe').attr('src'));
		});
	</script>
</body>
</html>
