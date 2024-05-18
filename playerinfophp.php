<!DOCTYPE html>
<html>
<head>
	<title>Player info php</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","","cricket");
	if(!$con)
	{
		print("not connected");
	}
	$tnm=$_REQUEST['tnm'];
	$mt=$_REQUEST['mt'];
	$pnm=$_REQUEST['pnm'];
	$ptp=$_REQUEST['ptp'];
	$rn=$_REQUEST['rn'];
	$hsc=$_REQUEST['hsc'];
	$cen=$_REQUEST['cen'];
	$btst=$_REQUEST['btst'];
	$bwtp=$_REQUEST['bwtp'];
	$wkt=$_REQUEST['wkt'];
	$bfig=$_REQUEST['bfig'];

	$count=mysqli_query($con,"insert into player values('$tnm','$mt','$pnm','$ptp','$rn','$hsc','$cen','$btst','$bwtp','$wkt','$bfig')");
	if($count>=1)
	{
		?>
			<script type="text/javascript" language="javascript">
				alert("Record Inserted Successfully !!");
			</script>
			<?php
			include("playerinfo.html");
	}
	
?>
</body>
</html>