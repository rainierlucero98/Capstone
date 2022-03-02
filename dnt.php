<html>
<title> City Health Office - Medical Services</title>
<head>
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
	font-family: Trebuchet MS;
    margin: 4px 2px;
    cursor: pointer;	
}
h1{
	font-size:30px;
	font-family:Tahoma;
}
</style>
</head>
<?php
session_start();
?>
<body bgcolor="#31E509">


<center>
    <h1 style="font-family:Tahoma">Dental Services Division</h1>
</center>
<body>
  
  <h1 align="center" >You are now serving:</font><br></h1>
  <?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='Select serving,priority FROM queue WHERE counter="C2"';
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			echo'<center>';
			$count= count($row);
			$x=1;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<h1>';
				echo ($c_row); 
				echo'</h1>';
				next($row);
				$x++;
				
			}
			echo'<h1>OF</h1>';
			
			$y=1;
			while ($y<$count)
			{
				$d_row=current($row);
				echo'<h1>';
				echo ($d_row); 
				echo'</h1>';
				next($row);				
				$y++;
				
			} 
		
						
			echo'</center>';
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?>

			
</select> 
</body>
</html>  
                                       