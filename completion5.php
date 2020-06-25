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
		<div style="border:10px solid black; text-align:center; border-radius:5px; height:595px; width:962px; background-color:black; margin:70px 0 0 300px;">
		<div style="border:5px solid black; text-align:center; border-radius:30px; height:583px; width:951px; background-color:red;">
		<div style="border:5px solid black; text-align:center; border-radius:40px; height:573px; width:942px; background-color:yellow;">
		<div style="border:5px solid black; text-align:center; border-radius:60px; height:563px; width:933px; background-color:black;">
		<div style="border:5px solid #fff; text-align:center; border-radius:70px; height:553px; width:924px; background-color:black;">
		<h1 style="color:#fff;">CERTIFICATE OF COMPLETION</h1>
		<p style="color:orange; padding-top:100px;">This certifies that</p>
		<h1 style="padding-top:5px; color:#fff;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:orange;">has successfully completed the Graphics</p>
		<p style="font-size:15px; color:orange;">Design at <?php echo "$iname"; ?>.</p>
		<table style="margin-top:120px;">
			<th style="padding-left:220px; font-size:10px; color:#fff;"><hr style="width:150px;"><?php echo "$sign1" ?></th>
			<th style="padding-left:200px; font-size:10px; color:#fff;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
		</table>
		</div>
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