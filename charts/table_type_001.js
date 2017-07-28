document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1srtOh6iyHjGV1Wnw3OiHmJxV7c1cC2BKHBec5uFmdiY/gviz/tq?gid=1659149536&headers=1&range=A2:B13');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			//title: 'Influence Required for 90% Odds of Playing Card on Curve'
			//showRowNumber: true, 
      			//sort: enable,
      			//sortAscending: false,
      			//sortColumn: 3,
        	};

        	var table = new google.visualization.Table(document.getElementById('table_type_001'));

        	table.draw(data, options);
	}
	
	function resizeChart () {
    		table.draw(data, options);
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
