<?php

$product_namee=$_POST["product_namee"];
$product_IDd=$_POST["product_IDd"];
$product_pricee=$_POST["product_pricee"];

$con=mysql_connect("localhost","root","");

mysql_select_db("test2");

$query=mysql_query("insert into admin ((AName,Password,e-mail) values
('$product_namee','$product_IDd','$product_pricee')
");

if ($query)
{
	header("Location: select_all.php");
}
else
{
echo "can not register";
}

mysql_close($con);

?>
