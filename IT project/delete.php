<?php

$id=$_GET["id"];

$con=mysql_connect("localhost","root","123");

mysql_select_db("news_db");

$query=mysql_query("delete from news where news_id=$id");

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
