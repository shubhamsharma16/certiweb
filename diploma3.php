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
		<div style="border:30px solid #708238; text-align:center; height:600px; width:900px; margin:50px 0 0 300px;">
		<div style="border:10px solid #800000; text-align:center; height:540px; width:840px;">
		<div style="border:10px solid #708238; text-align:center; height:520px; width:820px;">
		<img src="https://img.icons8.com/bubbles/100/000000/christmas-star.png">
		<h1 style="color:#708238"><?php echo "$iname"; ?> Diploma<hr style="width:500px;"></h1>
		<p style="padding-top:50px; color:#613613;">Let it be declared that</p>
		<h1 style="color:#708238;"> <?php echo "$fname"; ?><hr style="width:300px;"></h1>
		<p style="padding-top:10px; color:#613613">has completed all requirements for the Bachelor</p>
		<p style="color:#613613">of Science in Business course.</p>
		<table style="margin-top:60px;">
			<th style="padding-left:250px; font-size:7px;"><hr style="width:76px;"> <?php echo "$sign1"; ?></th>
			<th style="padding-left:70px; font-size:7px;"><img src="https://img.icons8.com/ultraviolet/40/000000/certificate.png"></th>
			<th style="padding-left:70px; font-size:7px;"><hr style="width:76px;"> <?php echo "$sign2"; ?></th>
		</table>
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