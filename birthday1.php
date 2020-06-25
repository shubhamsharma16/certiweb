<?php
include "data.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>B'day certificate</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	
	<body style="background:url('imgweb/allmain.jpg'); background-size: cover;">
		<div style="border:5px solid skyblue; height:595px; width:960px; background-image:url('imgweb/birth1.jpg'); background-size:cover; margin:100px 0 0 300px;">
		<div class="container">
		<div class="row">
		<div class="col-sm-8">
		<h1 style="padding:20px 0 0 20px; color:gold;"><img src="https://img.icons8.com/color/48/000000/birthday.png"><?php echo"$iname"; ?><img src="https://img.icons8.com/color/48/000000/birthday.png"></h1>
		<p style="padding:50px 0 0 180px; font-size:15px; color:#fff;">This is presented to</p>
		<h1 style="color:gold; padding-left:40px;;"><img src="https://img.icons8.com/color/96/000000/party-baloons.png" height="40" width="40">B'day Boy <?php echo"$fname"; ?><img src="https://img.icons8.com/color/96/000000/party-baloons.png" height="40" width="40"></h1>
		<p style="font-size:15px; padding-left:70px; color:#fff;">on her birthday today,<?php echo "$date"; ?>.May all your wishes come true!</p>
		<table style="margin-top:100px;">
			<th style="padding-left:50px; font-size:10px; color:yellow;"><hr style="width:150px;"><?php echo "$fname"; ?></th>
			<th style="padding-left:60px; font-size:10px; color:yellow;"><hr style="width:150px;"><?php echo"$sign2"; ?></th>
		</table>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
		</div>
		</div>

		<div style="text-align:center; margin-top: 10px;">
		<button onclick="print()" class="btn btn-primary">PDF</button>
	</div>

								<script type="text/javascript">

										function print()
										{
											window.print(); = document.body.innerHTML;
										}
									
								</script>
	</body>
</html>