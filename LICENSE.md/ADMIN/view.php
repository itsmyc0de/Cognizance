<?php require('configg.php'); ?>
<!doctype html>
<html>
<head>
<style>
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
a{
	text-decoration:none;}

</style>
<meta charset="utf-8">
<title>Admin pannel</title>
</head>

<body>
<table width="100%" border="1"  cellpadding="2" cellspacing="3" bgcolor="#FFFFFF" >

<?php
$query=mysqli_query($link,"select * from tech") or die(mysqli_error($link)) ;
echo "<tr><td colspan=16 align=center>Technical Events</td></tr>";
echo "<tr>";
echo "<td>ID </td><td>NAME</td><td>ROLL NO</td> <td>DEPARTMENT</td><td>MOBILE</td><td>EVENT</td><td>MAIL ID</td><td>MEM1 NAME</td><td>MEM1 PH</td><td>MEM2 NAME</td><td>MEM2 PH</td><td>MEM3 NAME</td><td>MEM3 PH</td><td>MEM4 NAME</td><td>MEM4 PH</td>";
echo "</tr>";
	while($row = mysqli_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['rollno']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['event']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mem1_name']."</td>";
		echo "<td>".$row['mem1_phone']."</td>";
		echo "<td>".$row['mem2_name']."</td>";
		echo "<td>".$row['mem2_phone']."</td>";
		echo "<td>".$row['mem3_name']."</td>";
		echo "<td>".$row['mem3_phone']."</td>";
		echo "<td>".$row['mem4_name']."</td>";
		echo "<td>".$row['mem4_phone']."</td>";
		echo "</tr>";
	}



?>
</table>
<a href="../php/tec_excel.php"><input type="submit" value="Export to Excel" /></a>
<hr color="#FF0000" ><hr color="#FF0000" >

<table width="100%" border="1"  cellpadding="2" cellspacing="3" bgcolor="#FFFFFF" >

<?php
$query=mysqli_query($link,"select * from non_tech") or die(mysqli_error($link)) ;
echo "<tr><td colspan=16 align=center>Non Technical Events</td></tr>";
echo "<tr>";
echo "<td>ID </td><td>NAME</td><td>ROLL NO</td> <td>DEPARTMENT</td><td>MOBILE</td><td>EVENT</td><td>MAIL ID</td><td>MEM1 NAME</td><td>MEM1 PH</td><td>MEM2 NAME</td><td>MEM2 PH</td><td>MEM3 NAME</td><td>MEM3 PH</td><td>MEM4 NAME</td><td>MEM4 PH</td>";
echo "</tr>";
	while($row = mysqli_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['rollno']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['event']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mem1_name']."</td>";
		echo "<td>".$row['mem1_phone']."</td>";
		echo "<td>".$row['mem2_name']."</td>";
		echo "<td>".$row['mem2_phone']."</td>";
		echo "<td>".$row['mem3_name']."</td>";
		echo "<td>".$row['mem3_phone']."</td>";
		echo "<td>".$row['mem4_name']."</td>";
		echo "<td>".$row['mem4_phone']."</td>";
		echo "</tr>";
	}



?>
</table>
<a href="../php/nontec_excel.php"><input type="submit" value="Export to Excel" /></a>
<hr color="#FF0000" ><hr color="#FF0000" >

<table width="100%" border="1"  cellpadding="2" cellspacing="3" bgcolor="#FFFFFF" >

<?php
$query=mysqli_query($link,"select * from fun") or die(mysqli_error($link)) ;
echo "<tr><td colspan=16 align=center>Fun Events</td></tr>";
echo "<tr>";
echo "<td>ID </td><td>NAME</td><td>ROLL NO</td> <td>DEPARTMENT</td><td>MOBILE</td><td>EVENT</td><td>MAIL ID</td><td>MEM1 NAME</td><td>MEM1 PH</td><td>MEM2 NAME</td><td>MEM2 PH</td><td>MEM3 NAME</td><td>MEM3 PH</td><td>MEM4 NAME</td><td>MEM4 PH</td>";
echo "</tr>";
	while($row = mysqli_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['rollno']."</td>";
		echo "<td>".$row['department']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['event']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['mem1_name']."</td>";
		echo "<td>".$row['mem1_phone']."</td>";
		echo "<td>".$row['mem2_name']."</td>";
		echo "<td>".$row['mem2_phone']."</td>";
		echo "<td>".$row['mem3_name']."</td>";
		echo "<td>".$row['mem3_phone']."</td>";
		echo "<td>".$row['mem4_name']."</td>";
		echo "<td>".$row['mem4_phone']."</td>";
		echo "</tr>";
	}



?>

</table>
<a href="../php/fun_excel.php"><input type="submit" value="Export to Excel" /></a><br><hr><hr>
<a href="../php/upload/TECH_FILES.php"><input type="submit" value="Technical Uploads"></button></a><a href="../php/upload_non/NON_TECH_FILES.php"><input type="submit" value="non Technical uploads"></button></a>
</body>
</html>