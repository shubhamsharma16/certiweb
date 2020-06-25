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
		<div style="border:5px solid skylue; border-radius:5px; height:595px; width:960px; background-color:gray; margin:50px 0 0 300px;">
		<div style="padding:50px 0 0 50px;">
		<div style="border:5px solid skyblue; border-radius:20px; height:480px; width:850px; background-color:skyblue;">
		<div style="padding:25px 0 0 28px;">
		<div style="border:5px solid gray; border-radius:5px; height:420px; width:780px; background-color:gray;">
		<h1 style="padding:20px 0 0 100px; color:lightgray;"><?php echo "$iname"; ?> ACHIEVEMENT AWARD</h1>
		<P style="color:lightgray; padding:50px 0 0 310px;">This award is granted to</P>
		<h1 style="padding:10px; color:lightgray; text-align: center;"><?php echo "$fname"; ?></h1>
		<p style="font-size:15px; padding-left:180px; color:lightgray;">who has received top grades and honors for this school year.</p>
		<table style="margin-top:80px;">
			<th style="padding-left:190px; font-size:10px; color:lightgray;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
			<th style="padding-left:60px; font-size:10px; color:lightgray;"><hr style="width:150px;"><?php echo "$sign1"; ?></th>
		</table>
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