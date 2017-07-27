document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1jUyXuP_IHkbge8Gw-Ev12K1qKoAg7eyrRx3NikLkUyk/gviz/tq?gid=1459661057&headers=1&range=A32:P44');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			title: 'Unit Availability per Power Cost, by Deck Type',
			curveType: 'function',
			legend: { position: 'bottom' },
			hAxis: {
				title: '# Units'
			},
			vAxis: {
				title: 'Power Cost'
			}
        	};

        	var chart = new google.visualization.LineChart(document.getElementById('chart_units_003'));

        	chart.draw(data, options);
	}
	
	function resizeChart () {
    		chart.draw(data, options);
	}
	
	if (document.addEventListener) {
    		window.addEventListener('resize', resizeChart);
	}
	else if (document.attachEvent) {
    		window.attachEvent('onresize', resizeChart);
	}
	else {
    		window.resize = resizeChart;
	}
	
}, false);
