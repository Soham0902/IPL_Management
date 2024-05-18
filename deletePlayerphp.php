<!DOCTYPE html>
<html>
<head>
	<title>delete player details</title>
</head>
<body>
<?php
		$con=mysqli_connect("localhost","root","","cricket");
        if(!$con)
        {
            print("not connected");
        }
        $pnm=$_REQUEST['pnm'];
        $count=mysqli_query($con,"delete from player where PlayerName='$pnm'");
        if($count>=1)
        {
        	?>
            <script type="text/javascript" language="javascript">
                alert("Record Deleted Successfully !!");
            </script>
            <?php
            include("cricket.html");
        }
?>
</body>
</html>