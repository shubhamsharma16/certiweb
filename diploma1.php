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
		<div style="border:30px solid #deb887; text-align:center; height:600px; width:900px; margin:40px 0 0 300px;">
		<h1 style="font-size:30px; color:#deb887;"><?php echo"$iname" ?></h1>
		<img src="https://img.icons8.com/ios-filled/50/000000/aclc-college.png">
		<p style="padding-top:50px; color:#613613">This is awarded to</p>
		<h1 style="color:#deb887;"> <?php echo "$fname"; ?></h1>
		<p style="padding-top:10px; color:#613613">for having completed the required course of study in</p>
		<p style="color:#613613; ">Deendayal Diploma college.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:250px; font-size:10px;"><hr style="width:76px;"><?php echo "$sign1";  ?></th>
			<th style="padding-left:70px;"><img src="https://img.icons8.com/dotty/80/000000/certificate.png"></th>
			<th style="padding-left:70px; font-size:10px;"><hr style="width:76px;"><?php echo "$sign2";  ?></th>
		</table>
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