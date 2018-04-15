<?php
$id=$_GET["id"];

$con=mysql_connect("localhost","root","123");

mysql_select_db("news_db");

$query=mysql_query("select * from news where news_id=$id");

$row=mysql_fetch_array($query);

mysql_close($con);

?>


<form name="f1" action="update_ok.php" method="post">
<input type="hidden" name="id2" id="id2" value="<?php echo $id;?>">
news title: <input type="text" name="news_title" id="news_title" value="<?php echo $row["news_title"];?>"><br>
News Desc: <input type="text" name="news_desc" id="news_desc" value="<?php echo $row["news_details"];?>" ><br>

<input type="submit" value="Update Data">
</form>

