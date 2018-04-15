<?php

$news_title=$_POST["news_title"];
$news_desc=$_POST["news_desc"];


$con=mysql_connect("localhost","root","123");

mysql_select_db("news_db");

$query=mysql_query("insert into news (news_title,news_details) values
('$news_title','$news_desc')
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
