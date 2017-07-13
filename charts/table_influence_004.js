document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1heFua3RYluzNAIl_Q_0BiOq_ri4Bs6azD3to672R-C8/gviz/tq?gid=1246579424&headers=1&range=A1:F30');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			//title: 'Cards With > Influence Requirement'
			//showRowNumber: true, 
      			//sort: enable,
      			//sortAscending: false,
      			//sortColumn: 3,
        	};

        	var table = new google.visualization.Table(document.getElementById('table_influence_004'));

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
