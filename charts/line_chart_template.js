// Fire: #ff0000 / red
// Justice: #008000 / green
// Time: #ffd700 / gold
// Primal: #0000ff / blue
// Shadow: #4b0082 / indigo
// None: #708090 / slategray
// Argenport: #556B2F / darkolivegreen
// Combrei: #BEFF00 / greenyellow
// Elysian: #4385FF / cornflowerblue
// Feln: #8A2BE2 / blueviolet
// Hooru: #008080 / teal
// Praxis: #FA8072 / salmon
// Rakano: #FF4500 / orangered
// Skycrag: #00FFFF / cyan
// Stonescar: #800000 / maroon
// Xenan: #483D8B / darkslateblue

document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/16_ICRavvwQN_qJSHuj3CZMDsTFZAHPuD1Oy7mndEyKs/gviz/tq?gid=1614771438&headers=1&range=I2:O13');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			title: 'Average Influence Cost of Power Cost, by Faction',
			curveType: 'function',
			legend: { position: 'bottom' },
			hAxis: {
				title: 'Power Cost'
			},
			vAxis: {
				title: 'Average Influence Cost'
			}
        	};

        	var chart = new google.visualization.LineChart(document.getElementById('chart_001'));

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
