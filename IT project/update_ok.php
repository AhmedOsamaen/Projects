<?php


$id2=$_POST["id2"];
$product_name=$_POST["product_name"];
$product_ID=$_POST["product_ID"];
$product_price=$_POST["product_price"];
$product_category=$_POST["product_category"];
$con=mysql_connect("localhost","root","");

mysql_select_db("test2");


$query=mysql_query("update products set PName='$product_name', PID='$product_ID', PPrice='$product_price',PCategory='$product_category'
where PID=$id2");

if ($query)
{
	header("Location: select_all.php");
}
else
{
echo "not updated";
}

mysql_close($con);

?>
