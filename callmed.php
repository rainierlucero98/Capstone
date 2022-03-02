<html>
<?php 
$connection = mysql_connect('localhost','cityhealth','123');
mysql_select_db('cho') ;
$query = "UPDATE queue SET serving = serving + 1 WHERE counter = 'C1'";
$result = mysql_query($query);


echo "<a  href='callmed.php'>Go</a>";
			mysql_close($connection);
;
			?>