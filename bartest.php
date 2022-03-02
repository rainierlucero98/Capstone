<html>
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
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div"></div>
      </html>