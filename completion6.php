<?php
include "data.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Completion certificate</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	
	<body style="background:url('imgweb/allmain.jpg'); background-size: cover;">
		<div style="border:10px solid #363636; text-align:center; border-radius:5px; height:597px; width:962px; background-color:lightgreen; margin:70px 0 0 300px;">
		<div style="border:5px solid lightgreen; text-align:center; border-radius:40px; height:575px; width:942px; background-color:lightgreen;">
		<div style="border:5px solid #363636; text-align:center; border-radius:60px; height:565px; width:933px; background-color:#363636;">
		<div style="border:5px solid lightgreen; text-align:center; border-radius:70px; height:555px; width:922px; background-color:#363636;">
		<img src="https://img.icons8.com/nolan/96/000000/ok.png">
		<h1 style="color:#fff;">CERTIFICATE OF COMPLETION</h1>
		<p style="color:lightgreen; padding-top:70px;">This certifies that</p>
		<h1 style="padding-top:5px; color:#fff;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:lightgreen;">has successfully completed the web designing</p>
		<p style="font-size:15px; color:lightgreen;">course from <?php echo "$iname"; ?>.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:220px; font-size:10px; color:#fff;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:200px; font-size:10px; color:#fff;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
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