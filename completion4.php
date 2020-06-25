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
		<div style="border:10px solid black; text-align:center; border-radius:5px; height:600px; width:920px; background-color:skyblue; margin:70px 0 0 300px;">
		<div style="padding-left:35px;">
		<div style="border:5px solid black; border-radius:60px; height:590px; width:831px; background-color:black;">
		<h1 style="padding-top:40px; color:skyblue;"><u>Completion Certificate</u></h1>
		<p style="color:pink; padding-top:100px;">This is certify that</p>
		<h1 style="padding-top:5px; color:skyblue;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:pink;">successfully completed the programming language course</p>
		<p style="font-size:15px; color:pink;">for beginner from scratch online course.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:140px; font-size:10px; color:skyblue;"><hr style="width:150px;">p<?php echo "$sign1"; ?></th>
			<th style="padding-left:90px;"><img src="https://img.icons8.com/cotton/64/000000/completed-task.png"></th>
			<th style="padding-left:90px; font-size:10px; color:skyblue;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
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