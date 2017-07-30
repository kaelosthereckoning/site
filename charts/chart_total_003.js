document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1oCWXuuVrJ66zxV28KLHeN8gI8LCy4S_nTJ3_Tfkxyr0/gviz/tq?gid=0&headers=1&range=G2:H');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			title: 'Card Availability, by Deck Type',
			legend: { position: 'bottom' },
			pieSliceText: 'label',
        	};

        	var chart = new google.visualization.PieChart(document.getElementById('chart_total_003'));

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
