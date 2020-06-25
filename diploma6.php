<?php
include "data.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Diploma certificate</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	
	<body style="background:url('imgweb/allmain.jpg'); background-size: cover;">
		<div style="margin:50px 0 0 250px; margin:70px 0 0 300px;">
		<div style="border:5px solid #363636; text-align:center; height:600px; width:880px; background-image:url('imgweb/dpp6.jpg'); background-size:cover; ">
		<div style="padding:25px 0 0 30px;">
		<div style="border:1px solid #363636; text-align:center; border-radius:10px; width:810px; height:540px; background-color:#363636;">
		<h1 style="padding-top:20px; color:#e7c27d;; font-size:20px;"><?php echo"$iname" ?></h1>
		<h1 style="color:#e7c27d;; font-size:20px;">*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*</h1>
		<p style="padding-top:100px; color:#89cfef;">Winslough High awards</p>
		<h1 style="color:#e7c27d;"><?php echo"$fname" ?><hr style="width:300px;"></h1>
		<p style="color:#89cfef;">for having completed all the mandatory</p>
		<p style="color:#89cfef;">requirements for graduation.</p>
		<table style="margin-top:80px;">
			<th style="padding-left:220px; font-size:7px; color:#89cfef"><hr style="width:76px;"><?php echo"$sign1" ?></th>
			<th style="padding-left:200px; font-size:7px; color:#89cfef"><hr style="width:76px;"><?php echo"$sign2" ?></th>
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