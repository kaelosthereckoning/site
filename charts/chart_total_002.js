document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1M7sbpFIlvchRQ4CYE-S5EifDXltz5sBFO2vPNqjce9Q/gviz/tq?gid=1727656933&headers=1&range=A3:H15');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			title: 'Total Card Availability per Power Cost, by Faction',
			curveType: 'function',
			legend: { position: 'bottom' },
			hAxis: {
				title: 'Power Cost'
			},
			vAxis: {
				title: 'Card Availability (# cards)'
			}
        	};

        	var chart = new google.visualization.LineChart(document.getElementById('chart_total_002'));

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
