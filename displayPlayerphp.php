<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url(5.jpg);
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-size: 100% 100%;
            font-family:Georgia, 'Times New Roman', Times, serif;
            color: white;
        }
        h1{
            text-align: center;
            color: rgb(42, 42, 155);
            padding: 20px;
            text-decoration: bold;
            
        }
        table{
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(22, 17, 17, 0.5);
            width: 30%;
        }
        .container{
            width: 50%;
            padding-top: 200px;
           
        }
        .tbody{
            color:white;
            font-size: 20px;
        }
        h1{
            color:rgb(25,56,138);
            text-decoration: bold;
            text-align: center;
        }
        .btn
        {
        	background-color: rgb(25,56,138);
        	color: white;

        }
        .demo{
        	text-decoration: none;
        	color: white;
        	font-size: 20px;
        }
        .demo:hover{
        	color: orange;
        }
    </style>
    
    <title>Show Player Details</title>
  </head>
  <body>
    <?php
        $con=mysqli_connect("localhost","root","","cricket");
        if(!$con)
        {
            print("not connected");
        }
        $pnm=$_REQUEST['pnm'];
        $rs=mysqli_query($con,"select * from player where PlayerName='$pnm'");
        $row=mysqli_fetch_array($rs);
        if(!$row)
        {
            ?>
            <script type="text/javascript" language="javascript">
                alert("No Such Player Exist..");
                window.location.href = "cricket.html";
            </script>
            <?php
            
        }
    ?>
    <h1>Show Player Details</h1>
    <div>
        <table class="tbody" cellpadding="6px" width=25%>
            <!-- <thead>
            <tr>
                <th scope="col" width="">Names</th>
                <th scope="col">Designation</th>
            </tr>
            </thead> -->
            <tr>    
                <td scope="row">Player name: </td>
                <td><?php print($row['PlayerName']) ?></td>
            </tr>
            <tr>
                <td scope="row">Team name: </td>
                <td><?php print($row['TeamName']) ?></td>
            </tr>
            <tr>    
                <td scope="row">Matches: </td>
                <td><?php print($row['Matches']) ?></td>
            </tr>
             
            <tr>    
                <td scope="row">Player Type: </td>
                <td><?php print($row['PlayerType']) ?></td>
            </tr> <tr>    
                <td scope="row">Runs: </td>
                <td><?php print($row['Runs']) ?></td>
            </tr>
            <tr>
                <td scope="row">Highest Score: </td>
                <td><?php print($row['HighestScore']) ?></td>
            </tr>
            <tr>    
                <td scope="row">100s/50s: </td>
                <td><?php print($row['Centuries']) ?></td>
            </tr>
            <tr>
                <td>Batting Style: </td>
                <td><?php print($row['BattingStyle']) ?></td>
            </tr>
            <tr>    
                <td >Bowling Type: </td>
                <td><?php print($row['BowlingType']) ?></td>
            </tr>
            <tr>
                <td scope="row">Wickets: </td>
                <td><?php print($row['Wickets']) ?></td>
            </tr>
            <tr>
                <td scope="row">Best Figure: </td>
                <td><?php print($row['BestFigure']) ?></td>
            </tr>
            <tr>
            	<td colspan="2">
            		<center><button class="btn"><a href="cricket.html" class="demo">Home</button></center>
            	</td>

            </tbody>
        </table>
    </div>        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>