document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/16_ICRavvwQN_qJSHuj3CZMDsTFZAHPuD1Oy7mndEyKs/gviz/tq?gid=834407673&headers=1&range=G64:L74');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			//title: 'Odds of Generating Any Card of Given Power + Rarity from Unstable Form'
			//showRowNumber: true, 
      			//sort: enable,
      			//sortAscending: false,
      			//sortColumn: 3,
        	};

        	var table = new google.visualization.Table(document.getElementById('table_002'));

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
