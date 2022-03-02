<?php

$edit_id = $_GET['edit_key'];
$query = "Select * from queue where ID = $edit_id";
$connection=mysql_connect('localhost','cityhealth','chicmagnet');
mysql_select_db('cho') ;
$result = mysql_query($query);
if(mysql_num_rows($result)>0);
{
while($row = mysql_fetch_row($result))
	{
	echo"<div class='form-group'><form name='input' action='edit.php' method='post' >
		Priority Number:<input type='text' name= 'Priority' value=$row[5] >
<br> </br>";
		}
}
echo "<input type='submit' value='Update' >";
echo "</div></form>";

mysql_free_result($result);
mysql_close($connection);
?>
