<html>
<title> SERVICE CLEARED</title>
<center>
  <p><font size="4"><img src="logo_main.png" alt="Logos" width="575" height="175" align="middle" hspace="20"><br>
            
	  <img></font></p>
</center>
<head>
<  
<style type="text/css">
table {
	font-family: Trebuchet MS;
	font-size:15px;
	border-collapse: collapse;	
	width: 50%;
	height: 51%;
}
table th {
	border-width: 1px;
	padding: 10px;
	border:10px double;
	border-color: #000000;
	background-color:#2989D5;
	color: white;
	font-size: 40px;
}
table td {
	border-width: 1px;
	padding: 10px;
	border:7px double;
	border-color: #000000;
	background-color: #FEFEFE;
	font-size: 30px;
	
}

button {
	background:#180AA5;
	color: white;
	border:auto solid;
	font-family: Trebuchet MS;
	font-size:25px;
	margin: auto;
	padding: auto;
	min-width: 30%;
	min-height:10%;	
    
	
}
</style>	
<body bgcolor="#31E509">
<center>    
    <h1 style="font-family:Trebuchet MS">SERVICE CLEARED</h1>
</center>
<center>
<?php
$connection = mysql_connect('localhost','cityhealth','123') or die("Connection Failed");
mysql_select_db('cho') ;
$query 	= "UPDATE queue SET serving=0, priority=0 ";

$result = mysql_query($query) ;
mysql_close($connection);
?>
<?php
$connection = mysql_connect('localhost','cityhealth','123') or die("Connection Failed");
mysql_select_db('cho') ;
$query 	= "TRUNCATE table counter_count";

$result = mysql_query($query) ;
mysql_close($connection);
?>
<a href="index.php"><button>Go Back</button></a>

</center>  
      




</body>
</head>
</html>
