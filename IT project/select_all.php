<a href="insert_pg.html"> Insert</a>

<table border=2 width="100%">
<?php

$con=mysql_connect("localhost","root","123");

mysql_select_db("news_db");

$query=mysql_query("select * from news");

while($row=mysql_fetch_array($query))
{
$id=$row["news_id"];
echo "<tr>";
echo "<td>".$row["news_title"];
echo "<td><a href='view.php?id=$id'>View</a></td>";
echo "<td><a href='update.php?id=$id'>update</a></td>";
echo "<td><a href='delete.php?id=$id'>delete</a></td>";
echo "</tr>";
}
mysql_close($con);

?>

</table>