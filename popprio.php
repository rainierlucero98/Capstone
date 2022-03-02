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
