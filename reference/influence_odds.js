document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1M7sbpFIlvchRQ4CYE-S5EifDXltz5sBFO2vPNqjce9Q/gviz/tq?gid=2060825227&headers=3&range=A1:BI');
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

        	var table = new google.visualization.Table(document.getElementById('influence_odds'));

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
