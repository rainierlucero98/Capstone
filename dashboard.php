<html>
<head>
<script type="text/javascript" src="date_time.js"></script>

<center>
<img src="cdo_seal.png" height="150px";width="180px"/>
<img src="doh.png"height="150px";width="180px"/>
<img src="philhealth.png"height="150px";width="180px"/>
<img src="cho.png" height="150px";width="180px"/> </br>
   
</center>
<title>
Reports
</title>
<style type="text/css">
input {
	background:#FBE507;
	color: black;
	font-family: Trebuchet MS;
	font-size:25px;
	padding: auto;}

table
{
	border-spacing:20px;

}
td,tr {
  background-color: blue;
  width: 200px;
  border: 12px white;
  padding: 25px;
  color:white;
  text-align:center
  }
a {
	font-family:Arial;
	font-size:20px;

}
body{
	background-color:#31E509;
}

</style>
</head>
<body>

<center><h2 style="font-family:Tahoma">Service Queueing System</h2>	</center>
<table><tr><td>
<?php
$dbhandle= new mysqli('localhost','cityhealth','123','cho');
echo $dbhandle -> connect_error;
$query="SELECT * FROM counter_count";
$res=$dbhandle ->query($query);
?>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date','Medical','Dental','Pharmacy','Animal_Bite' ],
         <?php
		  while($row=$res->fetch_assoc())
		  {
			   echo "['".$row['Date']."',".$row['Medical'].",".$row['Dental'].",".$row['Pharmacy'].",".$row['Animal_Bite']."],";
		  }
		  ?>        ]);


        var options = {
          title: 'Client Population',
          hAxis: {title: '2019',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <div id="chart_div" style="width: 400%; height: 300px;"></div>
 </td>
<td>
<?php
$dbhandle= new mysqli('localhost','cityhealth','123','cho');
echo $dbhandle -> connect_error;
$query="SELECT Priority,Serving,Name FROM queue";
$res=$dbhandle ->query($query);
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Name','Serving','Priority' ],
          <?php
		  while($row=$res->fetch_assoc())
		  {
			   echo "['".$row['Name']."',".$row['Serving'].",".$row['Priority']."],";
		  }
		  ?>
        ]);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 400,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>  </head>
    <div id="columnchart_values" style="width: 400px; height: 300px;"></div>
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div"></div></td>

<?php
$dbhandle= new mysqli('localhost','cityhealth','123','cho');
echo $dbhandle -> connect_error;
$query="SELECT * FROM queue";
$res=$dbhandle ->query($query);
?>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var prio = google.visualization.arrayToDataTable([
          ['Name', 'Priority'],
          <?php
		  while($row=$res->fetch_assoc())
		  {
			  echo "['".$row['Name']."',".$row['Priority']."],";
			  
		  }
		  ?>
        ]);<?php
$db= new mysqli('localhost','cityhealth','123','cho');
echo $db -> connect_error;
$sql="SELECT * FROM queue";
$result=$db ->query($sql);
?>
  
		var serve = google.visualization.arrayToDataTable([
          ['Counter', 'Serving'],
          <?php
		  while($tr=$result->fetch_assoc())
		  {
			  echo "['".$tr['Counter']."',".$tr['Serving']."],";
			  
		  }
		  ?>
        ]);

        var option1 = {
          title: 'Priority'
		  
        };
		var option2 = {
          title: 'Serving'
		  
        };


        var chart_p = new google.visualization.PieChart(document.getElementById('prio'));
		var chart_s = new google.visualization.PieChart(document.getElementById('serve'));

        chart_p.draw(prio, option1);
		chart_s.draw(serve,option2);
      }
    </script>



<td>
    <div left id="prio" style="width: 400px; height: 300px;"></div></td>
	<td><div right id="serve" style="width: 400px; height: 300px;"></div></td></table>
							  
											  
	<table class="border-spacing"><td><?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='Select priority FROM queue WHERE counter="C1"';
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			
			$count= count($row);
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<h1> Medical</h1><br>';
				echo '<a>No.of clients:<br>';
				echo ($c_row); 
				echo'</a><br>';
				next($row);
				$x++;
				
			}
			
						
			
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?><?php
			$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query="SELECT AVG(TIME_FORMAT(`Time`, '%H:%i')) FROM history_serve WHERE Counter='Medical'";
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			
			$count= count($row);
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<a> Average Serving Time:<br>';
				echo ($c_row); 
				echo'</a>';
				next($row);
				$x++;
				
			}
			
						
			
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?></td>
			<?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='Select priority FROM queue WHERE counter="C2"';
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			
			$count= count($row);
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<td><h1> Dental</h1><br>';
				echo '<a>No.of clients:<br>';
				echo ($c_row); 
				echo'</a><br>';
				next($row);
				$x++;
				
			}
			
					
			
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?><?php
			$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query="SELECT AVG(TIME_FORMAT(`Time`, '%H:%i')) FROM history_serve WHERE Counter='Dental'";
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			
			$count= count($row);
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<a> Average Serving Time:<br>';
				echo ($c_row); 
				echo'</a>';
				next($row);
				$x++;
				
			}
			
						
			
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?></td>
<?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='Select priority FROM queue WHERE counter="C3"';
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			
			$count= count($row);
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<td><h1> Pharmacy</h1><br>';
				echo '<a>No.of clients:<br>';
				echo ($c_row); 
				echo'</a><br>';
				next($row);
				$x++;
				
			}
			
		
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?><?php
			$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query="SELECT AVG(TIME_FORMAT(`Time`, '%H:%i')) FROM history_serve WHERE Counter='Pharmacy'";
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			
			$count= count($row);
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<a> Average Serving Time:<br>';
				echo ($c_row); 
				echo'</a>';
				next($row);
				$x++;
				
			}
			
						
			
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?></td><?php
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
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<td><h1> Animal Bite</h1><br>';
				echo '<a>No.of clients:<br>';
				echo ($c_row); 
				echo'</a><br>';
				next($row);
				$x++;
				
			}
					
			
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?><?php
			$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query="SELECT AVG(TIME_FORMAT(`Time`, '%H:%i')) FROM history_serve WHERE Counter='Animal Bite'";
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			
			$count= count($row);
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<a> Average Serving Time:<br>';
				echo ($c_row); 
				echo'</a>';
				next($row);
				$x++;
				
			}
			
						
			
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?></td>

<?php 
$connection=mysqli_connect('localhost','cityhealth','123','cho');
if(!$connection){
	echo "database error";
}

$sql="SELECT SUM(priority) AS `priority` FROM queue";
$res=mysqli_query($connection,$sql);
$data=mysqli_fetch_array($res);
echo"<td><a>Total no. of Clients:".$data['priority']." <a></td>";

			mysqli_free_result($res);
			
			?>
			<?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query='Select SUM(serving),SUM(priority) FROM queue';
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
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
		
			$answer=$d_row-$c_row;			
			echo"<td><a>Client Left:".($answer);
			echo"</a></td>";
		}
			mysql_free_result($result);
			mysql_close($connection);
			?><td><a>
 <span id="date_time"></span>
            <script  type="text/javascript">window.onload = date_time('date_time');</script></a></td>
			<td><?php
$connection=mysql_connect('localhost','cityhealth','123') or die ('Connection Failed');
mysql_select_db('cho');
$query="SELECT AVG(TIME_FORMAT(`Time`, '%H:%i')) FROM history_serve";
$result=mysql_query($query);
$i=0;

		while($i<mysql_num_fields($result))
		{
			$meta= mysql_fetch_field($result,$i);
			
		$i++;} 
		
		
		while ($row=mysql_fetch_row($result))
		{	
			
			
			$count= count($row);
			$x=0;
			while ($x<$count)
			{
				$c_row=current($row);
				echo'<a>Average Serving Time</a><br><h1>';
				echo ($c_row); 
				echo'</h1>';
				next($row);
				$x++;
				
			}
			
		
		
		}
			mysql_free_result($result);
			mysql_close($connection);
			?></td>
			</tr><table>
 </div>
 <table align="center"><tr>
<td style="border: 10px white;padding: 15px;width:14px;margin: 15px;">
<input type="button" onclick="window.location.href='dashboard_report.php';" value="Update" /></td>
<td style="border: 10px white;padding: 15px;width:14px;margin: 15px;"><input  type="button" onclick="window.location.href='history_data.php';" value="History" /></td>
<td style="border: 10px white;padding: 15px;width:14px;margin: 15px;"><input  type="button" onclick="window.location.href='index.php';" value="Home" /></td></tr>
</table>
</html>