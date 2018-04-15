<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	zenlike1.0 by nodethirtythree design
	http://www.nodethirtythree.com

-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>WhiteHawk Store by WhiteHawk Team</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="default.css" />
</head>
<body>

<div id="upbg"></div>

<div id="outer">


	<div id="header">
		<div id="headercontent">
			<h1>WhiteHawk Store<sup>0004</sup></h1>
			<h2>A free design by WhiteHawk Team</h2>
		</div>
	</div>


	<form method="post" action="">
		<div id="search">
			<input type="text" class="text" maxlength="64" name="keywords" />
			<input type="submit" class="submit" value="Search" />
		</div>
	</form>
	<a href="select_all.php"> back</a>


<table border=2 width="100%">
<?php
$id=$_GET["id"];

$con=mysql_connect("localhost","root","");

mysql_select_db("test2");

$query=mysql_query("select * from products where PID=$id");

$row=mysql_fetch_array($query);

echo "<tr>";
echo "<td>".$row["PName"]."<td>".$row["PPrice"]."<td>".$row["PCategory"]."<td>".$row["PID"];
echo "</tr>";

mysql_close($con);

?>

</table>

</body>
</html>
