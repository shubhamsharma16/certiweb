<?php
include "data.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Academic certificate</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	</head>
	
	<body style="background:url('imgweb/allmain.jpg'); background-size: cover;">
		<div style="border:5px solid skyblue; text-align:center; border-radius:5px; height:595px; width:960px; margin:50px 0 0 300px; background-image:url('imgweb/acad5.jpg'); background-size:cover;">
		<h1 style="color:#d6cfc7; padding:10px 0 0 600px;"><u>CERTIFICATE</u> <u>OF</u></h1> 
		<h1 style="color:#d6cfc7; padding-left:600px;"><u>BEST</u> <u>ART</u></h1>
		<p style="color:skyblue; padding-top:70px;">This certificate is goes to</p>
		<h1 style="padding-top:5px; color:#d6cfc7;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:skyblue;">for best art design in drowing competition.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:220px; font-size:10px; color:#d6cfc7;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:200px; font-size:10px; color:#d6cfc7;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
		</div>

		<div style="text-align:center; margin-top: 10px;">
		<button onclick="print('first')" class="btn btn-primary">PDF</button>
	</div>

								<script type="text/javascript">

										function print()
										{
											window.print(); = document.body.innerHTML;
										}
									
								</script>
	</body>
</html>