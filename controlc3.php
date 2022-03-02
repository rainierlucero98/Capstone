<html>
<title> City Health Office - Dental Services</title>


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
    margin: 4px 2px;
    cursor: pointer;	
}
</style>

<audio autoplay>
  
  <source src="bellsf.mp3" type="audio/mpeg">
</audio>
</head>
	
<body bgcolor="#31E509">
  
  <?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='Select serving,priority FROM queue WHERE counter="c3"';
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
				next($row);
				$x++;
				
			}
			
			$y=1;
			while ($y<$count)
			{
				$d_row=current($row);
				 
				
				next($row);				
			 $y++;
						}  
		
		}
		
			mysql_free_result($result);
			mysql_close($connection);
			echo'<form>';
			if($c_row>=$d_row){
			echo"<input type='submit' formaction='NextQueuec3.php' id='nextqueue' value='Go Serving' disabled/><br><a href='phupdate.php?edit_key=$row[0]'> Update</a>";
		}else{echo "<input type='submit' formaction='NextQueuec3.php' id='nextqueue' value='Go Serving' /><br><a href='phupdate.php?edit_key=$row[0]'> Update</a>";}
			echo'</form>';
			?>

  <center> 


</center>

</body>
</html>  
                                       