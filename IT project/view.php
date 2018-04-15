

<table border=2 width="100%">
<?php
$id=$_GET["id"];

$con=mysql_connect("localhost","root","123");

mysql_select_db("news_db");

$query=mysql_query("select * from news where news_id=$id");

$row=mysql_fetch_array($query);

echo "<tr>";
echo "<td>".$row["news_title"]."<td>".$row["news_details"];
echo "</tr>";

mysql_close($con);

?>

</table>