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
		<div style="border:2px solid black; border-radius:2px; height:630px; width:980px; background-image:url('imgweb/cmple1.png'); background-size:cover; margin:70px 0 0 300px;">
		<div style="padding:20px 0 0 20px; ">
		<div style="border:1px solid black; width:940px; height:590px; background-color:lightgray; text-align:center;">
		<h1 style="padding-top:20px;"><u style="color:maroon">> CERTIFICATE OF COMPLETION <</u></h1>
		<p style="color:black; padding-top:100px;">This certifies that</p>
		<h1 style="padding-top:5px; color:maroon;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:black;">successfully completed the Fallfield Council's Emergency</p>
		<p style="font-size:15px; color:black;">preparedness program.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:280px; font-size:10px; color:maroon;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:60px; font-size:10px; color:maroon;"><hr style="width:150px;"><?php echo "$sign2"; ?></th>
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