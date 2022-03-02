<?php
$dbhandle= new mysqli('localhost','cityhealth','123','cho');
echo $dbhandle -> connect_error;
$query="SELECT * FROM queue";
$res=$dbhandle ->query($query);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Name', 'Serving'],
          <?php
		  while($row=$res->fetch_assoc())
		  {
			  echo "['".$row['Name']."',".$row['Serving']."],";
		  }
		  ?>
        ]);

        var options = {
          title: 'Client Serving'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	
  </head>
  <body bgcolor="#31E509">
    <div id="piechart" style="width: 900px; height: 500px;"></div>
	
		
  </body>
  
</html>