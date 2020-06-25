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
		<div style="border:5px solid orange; border-radius:5px; height:595px; width:960px; background-image:url('imgweb/acad3.jpg'); margin:50px 0 0 300px;">
		<div style="padding:50px 0 0 50px;">
		<div style="border:5px solid gray; height:500px; width:850px; background-color:#222021;">
		<h1 style="padding:20px 0 0 150px; color:orange;  font-size:33px;">AWARD FOR <?php echo "$iname"; ?> EXECELLENCE</h1>
		<p style="color:#fff; padding:50px 0 0 340px;;">This is hereby granted to</p>
		<h1 style="padding:10px; color:orange; text-align: center;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; padding-left:210px; color:#fff;">for acquiring her full scholarship during the academic year of 2020..</p>
		<table style="margin-top:100px;">
			<th style="padding-left:230px; font-size:10px; color:orange;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:60px; font-size:10px; color:orange;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
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