google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/16_ICRavvwQN_qJSHuj3CZMDsTFZAHPuD1Oy7mndEyKs/gviz/tq?gid=1614771438&headers=2&range=I2:N13');
			query.send(handleQueryResponse);
      }

function handleQueryResponse(response) {
  var data = response.getDataTable();

        var options = {
          title: 'Influence',
          curveType: 'function',
          legend: { position: 'bottom' },
          hAxis: {title: 'Power Cost'},
          vAxis: {title: 'Average Influence Cost'}
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
