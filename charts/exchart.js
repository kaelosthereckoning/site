function drawMultipleTrendlineChart() {

    var chart;

    var data = new google.visualization.DataTable();
    data.addColumn('date', 'Date');
    data.addColumn('number', 'Sales value A');
    data.addColumn('number', 'Sales value B');
    
   data.addRows([
        [new Date(2013, 3, 11),   200,  1000],
        [new Date(2013, 4, 02),   500,  650],
        [new Date(2013, 5, 03),   700,  550],
        [new Date(2013, 6, 04),   800,  95],
        [new Date(2013, 7, 05),   500,  400],
        [new Date(2013, 8, 06),   900,  250],
        [new Date(2014, 0, 07),   800,  300],
        [new Date(2014, 1, 08),  2000,  200],
        [new Date(2014, 2, 09),  1000,  312]
      ]);

    
    var formatter = new google.visualization.NumberFormat({
        fractionDigits: 2,
        prefix: 'R$:'
    });
    formatter.format(data, 1);
    var dateFormatter = new google.visualization.NumberFormat({
        pattern: 'MMM yyyy'
    });
    dateFormatter.format(data, 0);
    var chartHeight = 400;
    var chartWidth = 600;
    var chartOptions = {
        tooltip: {
            isHtml: true
        },
        trendlines: {
            0: {
                //type: 'polynomial',
                //degree: 3,
                color: 'red'
            },
            1: {
                color: 'yellow'
            },
        },
        title: 'Trendlines with multiple lines',
        isStacked: true,
        width: chartWidth,
        height: chartHeight,
        colors: ['#0000D8', '#00dddd'],
        hAxis: {
            title: 'example title',
            slantedText: false,
            slantedTextAngle: 45,
            textStyle: {
                fontSize: 10
            },
            format: 'dd-MM-yyyy'
        },
        chartArea: {
            left: 50,
            top: 20,
            width: (chartWidth - 10),
            height: (chartHeight - 90)
        }
    };
    chart = new google.visualization.LineChart(document.getElementById('multipleTrendChart'));
    chart.draw(data, chartOptions);
}

google.load('visualization', '1', {
    packages: ['corechart'],
    callback: drawMultipleTrendlineChart
});
