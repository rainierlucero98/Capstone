<html>
<style type="text/css">
table {
	font-family: Courier New;
	font-size:12px;
	border-collapse: ;	
	width: 20px;
	height: 21px;
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
	border:5px double;
	border-color: #000000;
	background-color: #FEFEFE;
	font-size: 20px;
	
}
h1 {
	font-family:Courier New;
	text-align:left;
}
</style>
<body>	
<h1>History Serving</h1>
<?php 

$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='SELECT Time,Counter,Serve 
FROM history_serve ';

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
			$y=2;
			while ($y<$count)
			{
				$c_row=current($row);
				echo '<td style="font-family:Century Gothic"">';
				echo ($c_row); 
				echo '</td>';
				next($row);				
				$y++;
				
			}
			$x=1;
			while ($x<$count)
			{
				$c_row=current($row);
				echo '<td style="font-family:Courier New">';
				echo '<b>';
				echo ($c_row); 
				echo '</b>';
				echo '</td>';
				next($row);				
				$x++;
				
			}
			
			
			
		} 
		
		
			echo "</table>";
			echo"</div>";
			mysql_free_result($result);
			mysql_close($connection);

			?>
			</body>
			<html>