<html>
<title> City Health Office - Medical Services</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
input[type=submit] {
   background-color: #008CBA;
    border: 5px solid;;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
a{
   background-color: #008CBA;
    border: 5px solid;;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;	
}
select {

background-repeat:no-repeat;
background-position:300px;
width:353px;
padding:12px;
margin-top:8px;
font-family:Cursive;
line-height:1;
border-radius:5px;
background-color:#008CBA;
color:#ff0;
font-size:20px;
-webkit-appearance:none;
box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6);
outline:none
}

</style>
</head>

<body bgcolor="#31E509">
<center>
<?php
$edit_id = $_GET['edit_key'];
$query = "Select * from queue where Counter = 'C1'";
$connection=mysql_connect('localhost','cityhealth','123');
mysql_select_db('cho') ;
$result = mysql_query($query);
if(mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_row($result))
	{
	echo"<form name='input' action='mdedit.php' method='post' >";
		echo"<div class='custom-select' style='width:500px;'>";
		echo'<select name="serving">';



for($i=0; $i<=$row[4]; $i++)
{

    echo "<option value=".$i." ><center>".$i."</option>";
	
}
 
echo'</select>'; 
echo"</div>";}
}
echo"<br>";
echo"<br>";
echo"<br>";
echo "<input type='submit' value='Update' >";
echo "</form>";

mysql_free_result($result);
mysql_close($connection);
?>
</center>
</body>
</html>