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
		<div style="border:5px solid #fc6600; border-radius:5px; height:595px; width:960px; background-color:gray; margin:50px 0 0 300px;">
		<div style="padding:50px 0 0 50px;">
		<div style="border:5px solid #fc6600; border-radius:50%; height:480px; width:850px; background-color:#fc6600;">
		<div style="padding:25px 0 0 25px;">
		<div style="border:5px solid #fc6600; border-radius:5px; height:420px; width:780px; background-color:gray;">
		<h1 style="padding:20px 0 0 140px; color:orange;"><?php echo "$iname"; ?> EXCELLENCE AWARD</h1>
		<p style="color:#fff; padding:50px 0 0 310px;;">THIS IS AWARDED TO</p>
		<h1 style="padding:10px; color:orange; text-align: center;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; padding-left:180px; color:#fff;">for her outstanding scholastic performance for the school year.</p>
		<table style="margin-top:70px;">
			<th style="padding-left:190px; font-size:10px; color:orange;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:60px; font-size:10px; color:orange;"><hr style="width:150px;"> <?php echo "$sign2"; ?></th>
		</table>
		</div>
		<div>
		</div>
		</div>
		</div>
		</div>
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