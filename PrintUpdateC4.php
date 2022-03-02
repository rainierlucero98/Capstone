<head>
<script>
 setTimeout( function(){window.location.href = "frontdesk.php"},5000);
 </script>
</head>
<body  onload="window.print()">
<?php
/**

1st: Update queue where counter=C SET Priority = printed number
2nd: Print preview or print

**/
$connection = mysql_connect('localhost','cityhealth','123');
mysql_select_db('cho') ;
$query = "UPDATE queue SET Priority = Priority + 1 WHERE counter = 'C4'";
$result = mysql_query($query);

mysql_close($connection);

?><div class="modal-content1">
    <div class="modal-header1">
      
     
    </div>
    <div class="modal-body1">
      <center>
		<p><font size="4"><img src="logo_modal.png" alt="Logos" width="300" height="100" align="middle" hspace="20"><br>
           
	  </p></center>
	  <center>
        <h3 style="font-family:Tahoma">Animal Bite Service Division</h3>
		<h1 style="font-family:Arial">PRIORITY NUMBER</h1><br>
		<font size="100" style="font-family:Arial"><b><?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='Select priority FROM queue WHERE counter="C4"';
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
		
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			$count= count($row);
			$y=0;
			while ($y<$count)
			{
				$c_row=current($row);
				
				echo ($c_row)  ; 
				
				next($row);				
				$y++;
				
			}
		}
			mysql_free_result($result);
			mysql_close($connection);
			
			date_default_timezone_set('Asia/Manila');
			$date = date('m/d/Y h:i:s a', time());
			echo "<p>$date</p>";
			
			?><?php 
$connection = mysql_connect('localhost','cityhealth','123');
mysql_select_db('cho') ;
$timestamp = date("Y-m-d H:i:s");
$query =  "INSERT INTO counter_count(ID, Date, Medical,Dental,Pharmacy,Animal_Bite) VALUES ('','$timestamp','','','','$c_row')";

$result = mysql_query($query);

mysql_close($connection);
?>  
			
			</b></font>
      </center>
    </div>
    <div class="modal-footer1">
	<center align="right">
     
    </div>
	</center>
  </div>
  
</div>
  

</body>