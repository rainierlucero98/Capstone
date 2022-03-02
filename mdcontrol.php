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
</style>
</head>
<?php
session_start();
?>


<body bgcolor="#31E509">
  
  <p align="center" style="font-family:Tahoma" ><font size="5">You are now serving:</font><br></p>
  <?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='Select serving,priority FROM queue WHERE counter="C1"';
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
				echo'<h1 style="font-family:Tahoma">';
				 ($c_row); 
				echo'</h1>';
				next($row);
				$x++;
				
			}
			
			$y=1;
			while ($y<$count)
			{
				$d_row=current($row);
				echo'<h1 style="font-family:Tahoma">';
				 ($d_row); 
				echo'</h1>';
				next($row);				
				$y++;
				
			} 
		
			echo'<form>';
			if($c_row>=$d_row){
			echo"<input type='submit' formaction='md.php' id='nextqueue' value='Go Serving' disabled/>
			<a href='mdupdate.php?edit_key=$row[0]'> Update</a><a href='counter.html'>Go Back</a>";
		}else{echo "<input type='submit' formaction='NextQueueC1.php' id='nextqueue' value='Go Serving' />
		<a href='mdupdate.php?edit_key=$row[0]'> Update</a><a href='counter.html'>Go Back</a>";}
			echo'</form>';
						
			echo'</center>';
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?>

			
</select> 
</body>
</html>  
                                       