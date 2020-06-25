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
		<div style="border:5px solid #363636; border-radius:5px; height:595px; width:960px; background-image:url('imgweb/acad6.jpg'); background-size:cover; margin:50px 0 0 300px;">
		<div style="border:1px solid white; text-align:center; width:590px; height:593px;">
		<h1 style="color:#363636; padding-top:20px"><I><?php echo "$iname"; ?> EXCELLENCE</I></h1> 
		<p style="color:red; padding-top:90px;">This Excellence certificate is award to</p>
		<h1 style="padding-top:5px; color:#363636;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:red;">for garnering 1st honors in English and Math.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:70px; font-size:10px; color:#363636;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:150px; font-size:10px; color:#363636;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
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