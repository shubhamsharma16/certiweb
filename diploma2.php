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
		<div style="border:35px solid #800000; text-align:center; height:600px; width:900px; margin:50px 0 0 300px;">
		<div style="border:10px solid #deb887; text-align:center; height:530px; width:830px;">
		<h1 style="padding-top:50px; color:#deb887">DIPLOMA  OF  GRADUATION</h1>
		<p style="padding-top:50px; color:#613613;">This is to certify that</p>
		<h1 style="color: #deb887;">Mr.<?php echo" $fname";?></h1>
		<p style="padding-top:10px; color:#613613">has fulfilled the required course of study for the high school.</p>
		<p style="color:#613613"><?php echo" $iname";?>.</p>
		<table style="margin-top:100px;">
			<th style="padding-left:250px; font-size:7px;"><hr style="width:76px;"><?php echo" $sign1";?></th>
			<th style="padding-left:70px; font-size:7px;"><img src="https://img.icons8.com/bubbles/50/000000/unchecked-circle.png"></th>
			<th style="padding-left:70px; font-size:7px;"><hr style="width:76px;"><?php echo" $sign2";?></th>
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