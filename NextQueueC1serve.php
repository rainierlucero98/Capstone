<?
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$priority="select serving From Queue where counter=c1"

$query="Insert into history(date,counter transaction, priority no.)
Value NOW,Medical,$ $post,$priority";	

?>
<?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');


$query="INSERT INTO history(date,counter,priority) value getdate(), SELECT name,serving WHERE Counter='C1'";
$result = mysql_query($query);

mysql_close($connection);
?>

