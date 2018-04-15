<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

	zenlike1.0 by nodethirtythree design
	http://www.nodethirtythree.com

-->
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>zenlike1.0 by nodethirtythree</title>
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

<?php
$id=$_GET["id"];

$con=mysql_connect("localhost","root","");

mysql_select_db("test2");

$query=mysql_query("select * from products where PID=$id");

$row=mysql_fetch_array($query);

mysql_close($con);

?>


<form name="f1" action="update_ok.php" method="post">
<input type="hidden" name="id2" id="id2" value="<?php echo $id;?>">
new product Name: <input type="text" name="product_name" id="product_name"value="<?php echo $row["PName"];?>" ><br>
new product ID: <input type="text" name="product_ID" id="product_ID"value="<?php echo $row["PID"];?>" ><br>
new product Price:<input type="text" name="product_price" id="product_price"value="<?php echo $row["PPrice"];?>"><br>
new product Category:<input type="text" name="product_category" id="product_category"value="<?php echo $row["PCategory"];?>"><br>

<input type="submit" value="Update Data">
</form>

</body>
</html>

