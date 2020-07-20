google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Month', 'Азотистые', 'Фосфорнокислые', 'Калийные', 'Навоз', 'Известь', 'В Среднем'],
         ['2014/05',  16,       38,          22,              98,            50,       14.6],
         ['2015/06',  135,      1120,        599,             1268,          288,      682],
         ['2016/07',  157,      1167,        587,             807,           397,      623],
         ['2017/08',  139,      1110,        615,             968,           215,      609.4],
         ['2018/09',  136,      691,         629,             1026,          366,      569.6]
      ]);

    var options = {
      title : 'Внесение удобрений по годам',
      vAxis: {title: 'кг'},
      hAxis: {title: 'Месяц'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }