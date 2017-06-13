function line_flot() {

document.addEventListener('DOMContentLoaded', function() {
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var query = new google.visualization.Query('https://docs.google.com/spreadsheets/d/16_ICRavvwQN_qJSHuj3CZMDsTFZAHPuD1Oy7mndEyKs/gviz/tq?gid=1614771438&headers=1&range=I2:O13');
			query.send(handleQueryResponse);
      }

	function handleQueryResponse(response) {
  		var data = response.getDataTable();
      
      {
        color: color or number
        data: rawdata
        label: string
        lines: specific lines options
        bars: specific bars options
        points: specific points options
        xaxis: number
        yaxis: number
        clickable: boolean
        hoverable: boolean
        shadowSize: number
        highlightColor: color or number
    }
	
  var options = {
    series: {
        lines: { show: true },
        points: { show: true }
    }
};
	
$.plot(placeholder, data, options);

// customization of single series object
[obj]: {
    color: color or number
    data: rawdata
    label: string
    lines: specific lines options
    bars: specific bars options
    points: specific points options
    xaxis: number
    yaxis: number
    clickable: boolean
    hoverable: boolean
    shadowSize: number
    highlightColor: color or number
}

// customization of data series
series: {
    lines, points, bars: {
        show: boolean
        lineWidth: number
        fill: boolean or number
        fillColor: null or color/gradient
    }

    lines, bars: {
        zero: boolean
    }

    points: {
        radius: number
        symbol: "circle" or function
    }

    bars: {
        barWidth: number
        align: "left", "right" or "center"
        horizontal: boolean
    }

    lines: {
        steps: boolean
    }

    shadowSize: number
    highlightColor: color or number
}

colors: [ color1, color2, ... ]

// customization of legend
legend: {
    show: boolean
    labelFormatter: null or (fn: string, series object -> string)
    labelBoxBorderColor: color
    noColumns: number
    position: "ne" or "nw" or "se" or "sw"
    margin: number of pixels or [x margin, y margin]
    backgroundColor: null or color
    backgroundOpacity: number between 0 and 1
    container: null or jQuery object/DOM element/jQuery expression
    sorted: null/false, true, "ascending", "descending", "reverse", or a comparator
}

// customization of axes
xaxis, yaxis: {
    show: null or true/false
    position: "bottom" or "top" or "left" or "right"
    mode: null or "time" ("time" requires jquery.flot.time.js plugin)
    timezone: null, "browser" or timezone (only makes sense for mode: "time")

    color: null or color spec
    tickColor: null or color spec
    font: null or font spec object

    min: null or number
    max: null or number
    autoscaleMargin: null or number
    
    transform: null or fn: number -> number
    inverseTransform: null or fn: number -> number
    
    ticks: null or number or ticks array or (fn: axis -> ticks array)
    tickSize: number or array
    minTickSize: number or array
    tickFormatter: (fn: number, object -> string) or string
    tickDecimals: null or number

    labelWidth: null or number
    labelHeight: null or number
    reserveSpace: null or true
    
    tickLength: null or number

    alignTicksWithAxis: null or number
}

// customization of font
font: {
    size: 11,
    lineHeight: 13,
    style: "italic",
    weight: "bold",
    family: "sans-serif",
    variant: "small-caps",
    color: "#545454"
}

