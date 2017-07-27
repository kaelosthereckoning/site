document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/19AZiVnrB5nB5ttqOJbf6r3_acPDjEpfSn9JAn-qj5lg/gviz/tq?gid=98310883&headers=1&range=A32:P44');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			title: 'Cursed Relic Availability per Power Cost, by Deck Type',
			curveType: 'function',
			legend: { position: 'bottom' },
			hAxis: {
				title: '# Cursed Relics'
			},
			vAxis: {
				title: 'Power Cost'
			}
        	};

        	var chart = new google.visualization.LineChart(document.getElementById('chart_cursed_relics_003'));

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
