google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['View', 'тонн'],
          ['Пшеница',     11],
          ['Озимые',      2],
          ['Кукуруза',  2],
          ['Овёс', 2],
          ['Зерно',    7],
		  ['Рис' , 4]
        ]);

        var options = {
          title: 'Урожай 2016 года',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }