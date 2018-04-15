<?php

$id=$_GET["id"];

$con=mysql_connect("localhost","root","");

mysql_select_db("test2");

$query=mysql_query("delete from products where PID=$id");

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
