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
		<div style="border:25px solid #d6cfc7; text-align:center; border-radius:5px; height:595px; width:960px; margin:50px 0 0 300px;">
		<div style="border:25px solid #3a1f04; text-align:center; height:545px; width:911px; background-color:#3a1f04;">
		<div style="border:1px solid #d6cfc7; text-align:center; border-radius:50px; height:495px; width:860px; background-color:#d6cfc7;">
		<h1 style="color:maroon;">CERTIFICATE OF ATTENDANCE</h1>
		<p style="color:#3a1f04; padding-top:70px;">This is certifies that</p>
		<h1 style="padding-top:5px; color:maroon;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; color:#3a1f04;">has attend all seminars and meetings</p>
		<p style="font-size:15px; color:#3a1f04;">of a annual year.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:220px; font-size:10px; color:maroon;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:200px; font-size:10px; color:maroon;"><hr style="width:150px;">A<?php echo "$sign2"; ?></th>
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