<?php

$product_name=$_POST["product_name"];
$product_ID=$_POST["product_ID"];
$product_price=$_POST["product_price"];
$product_category=$_POST["product_category"];


$con=mysql_connect("localhost","root","");

mysql_select_db("test2");

$query=mysql_query("insert into products (PName,PID,PPrice,PCategory) values
('$product_name','$product_ID','$product_price','$product_category')
");

if ($query)
{
	header("Location: select_all.php");
}
else
{
echo "not inserted";
}

mysql_close($con);

?>
