<html>
<style type="text/css">
th {
	border-width: 1px;
	padding: 10px;
	border:10px double;
	border-color: #000000;
	background-color:#000000;
	color: white;
	font-size: 40px;
}
td {
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
input {
	background:#FBE507;
	color: black;
	font-family: Trebuchet MS;
	font-size:25px;
	padding: auto;}

</style>


<body>
<?php 

$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query="SELECT TIME_FORMAT(`DateTime`, '%H:%i') AS Time,Counter,Priority,ContactNum
FROM history ";

$result=mysql_query($query);
$i=0;
echo "";
echo"<div style='text-align:left'>";
echo "<table align='left'>";
echo"<th colspan='5'>History Ticket</th>";

	echo"<div class='container'>";
	echo "<tr>";
	
		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
			echo '<th >' . '<b>' . $meta->name. '</b>' . '</th>';
			
		$i++;}		echo'<th>Action</th>';

		
			
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
			$x=2;
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
			echo "<td>
			<input type='button' value=' Call'/>
			<input type='button' value=' Message'/>
			</td> ";
				echo'</tr>';
			
		} 
		
		
			echo "</table>";
			echo"</div>";
			mysql_free_result($result);
			mysql_close($connection);

			?></div>
			
<?php 

$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query="SELECT TIME_FORMAT(`Time`, '%H:%i') AS Time,Counter,Serve 
FROM history_serve ";

$result=mysql_query($query);
$i=0;

echo "<table align='right'>";
echo"<th colspan='3'>History Serving</th>";
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
		
			echo"</td>";
			
			
		} 
		
		
			echo "</table>";
			echo"</div>";
			mysql_free_result($result);
			mysql_close($connection);

			?>
<?php 

$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='SELECT Counter,NAME AS Services,Serving 
FROM queue 
ORDER by COUNTER ASC';

$result=mysql_query($query);
$i=0;
echo "";
echo"<div style='text-align:left'>";
echo "<table>";
echo"<th colspan='3'>As  of Now</th>";
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
			
			mysql_free_result($result);
			mysql_close($connection);

			?>

	<br>
<table align="right" ><tr>
<td style="border: 10px white;padding: 15px;width:14px;margin: 15px;">
<input type="button" onclick="window.location.href='history.php';" value="Update" /></td>
<td style="border: 10px white;padding: 15px;width:14px;margin: 15px;"><input  type="button" onclick="window.location.href='dashboard.php';" value="History" /></td>
<td style="border: 10px white;padding: 15px;width:14px;margin: 15px;"><input  type="button" onclick="window.location.href='dashboard.php';" value="Print" /></td>
<td style="border: 10px white;padding: 15px;width:14px;margin: 15px;"><input  type="button" onclick="window.location.href='index.php';" value="Home" /></td></tr>
</table>

			</div>
			</body>
			</html>