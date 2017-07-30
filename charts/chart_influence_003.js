document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1heFua3RYluzNAIl_Q_0BiOq_ri4Bs6azD3to672R-C8/gviz/tq?gid=1943591120&headers=1&range=A133:AD145');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			title: 'Average Influence Cost of Power Cost, by Deck Type',
			curveType: 'function',
			legend: { position: 'bottom' },
			hAxis: {
				title: 'Power Cost'
			},
			vAxis: {
				title: 'Average Influence Cost'
			}
        	};

        	var chart = new google.visualization.LineChart(document.getElementById('chart_influence_003'));

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
