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

// Faction Color Block
// series: {
//            			0: { color: '#ff0000' },
//            			1: { color: '#ffd700' },
//           			2: { color: '#008000' },
//            			3: { color: '#0000ff' },
//            			4: { color: '#4b0082' },
//           			5: { color: '#708090' },
//         		}
// colors: ['#ff0000', '#ffd700', '#008000', '#0000ff', '#4b0082','#708090']

document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/1heFua3RYluzNAIl_Q_0BiOq_ri4Bs6azD3to672R-C8/gviz/tq?gid=1943591120&headers=1&range=A2:G12');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();

        	var options = {
			title: 'Average Influence Cost of Power Cost, by Faction (Total)',
			curveType: 'function',
			legend: { position: 'bottom' },
			hAxis: {
				title: 'Power Cost'
			},
			vAxis: {
				title: 'Average Influence Cost (Total)'
			}
        	};

        	var chart = new google.visualization.LineChart(document.getElementById('chart_total_003'));

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
