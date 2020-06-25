<?php
include "data.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>sports certificate</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	
	<body style="background:url('imgweb/allmain.jpg'); background-size: cover;">
	
		<div style="margin:50px 0 0 250px;">
		<div style="border:2px solid brown; border-radius:2px; height:600px; width:900px; background-image:url('imgweb/sc1.jpg');">
		<div style="border:3px dotted brown; height:594px; width:894px; text-align:center;">
		<div style="border-bottom:0px solid brown;">
		</div>
		<div style="padding-top:100px;">
		<img src="https://img.icons8.com/wired/64/000000/charity.png" height="50px;">
		<h1 style="font-size:25px;">*CERTIFICATE of PARTICIPATON*</h1>
		<p>This certificate is awarded to</p>
		<h1 style="padding-left:20px;"><?php echo"$fname" ?></h1>
		<p>who is participated in <B>KABADDI </B>leauge on <?php echo "$date" ?></p>
		
		<table style="margin:80px 0px 0px 300px;">
		<th style="color:gray; font-size:10px; padding-right:250px;"><hr><?php echo"$sign1" ?></th>
		<th style="color:gray; font-size:10px;"><hr><?php echo"$sign2" ?></th>
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
	</Body>
	</body>
</html>