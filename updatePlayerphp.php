<!DOCTYPE html>
<html>
<head>
	<title>update player details</title>
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

	$count=mysqli_query($con,"update player set TeamName='$tnm' , Matches='$mt' , PlayerType='$ptp' , Runs='$rn' , HighestScore='$hsc' , Centuries='$cen' , BattingStyle='$btst' , BowlingType='$bwtp' , Wickets='$wkt' , BestFigure='$bfig' where PlayerName='$pnm'");

	if($count>=1)
	{
		?>
			<script type="text/javascript" language="javascript">
				alert("Record Updated Successfully !!");
			</script>
			<?php
			include("cricket.html");
	}
?>
</body>
</html>