<html>
<title> City Health Office - Queue Monitor</title>
<head>
   
<style type="text/css">
table {
	font-family: Trebuchet MS;
	font-size:80px;
	border-collapse: collapse;	
	width: 100%;
	height: 51%;
}
table th {
	border-width: 1px;
	padding: 10px;
	border:10px double;
	border-color: #000000;
	background-color:#2989D5;
	color: white;
}
table td {
	border-width: 1px;
	padding: 10px;
	border:7px double;
	border-color: #000000;
	background-color: #FEFEFE;
	
}
</style>	
<body bgcolor="#31E509">



<?php 

$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='SELECT COUNTER,NAME,SERVING 
FROM queue 
ORDER by COUNTER ASC';

$result=mysql_query($query);
$i=0;
echo "";
echo"<div style='text-align:left'>";
echo "<table>";
	echo"<div class='container'>";
	echo "<tr>";
		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
			echo '<th >' . '<b>' . $meta->name. '</b>' . '</th>';
			
		$i++;} 
		
		 
		while ($row=mysql_fetch_row($result))
		{	
			echo '<tr align="center">';
			$count= count($row);
			$y=1;
			while ($y<$count)
			{
				$c_row=current($row);
				echo '<td style="font-family:Century Gothic"">';
				echo ($c_row); 
				echo '</td>';
				next($row);				
				$y++;
				
			}
			$x=2;
			while ($x<$count)
			{
				$c_row=current($row);
				echo '<td style="font-family:Courier New">';
				echo '<b>#';
				echo ($c_row); 
				echo '</b>';
				echo '</td>';
				next($row);				
				$x++;
				
			}
			
			
			echo "</tr>";
		} 
		
		
			echo "</table>";
			echo"</div>";
			mysql_free_result($result);
			mysql_close($connection);

			?>




</body>
</head>
</html>