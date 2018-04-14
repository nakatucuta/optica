<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['fecha', 'id estado'],/*aqui va los titulos*/
          @foreach($graficas as $grafica)/*variable qu envias del controlador*/

          ['{{$grafica->date}}',{{$grafica->state_id}}],/*campos a mostrar*/
          @endforeach
          
        ]);

        var options = {
          title: 'Fecha',/*titulo de la grafica*/
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>