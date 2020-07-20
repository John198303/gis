<!DOCTYPE html>
<html>
<head>
<link href="../css/extension-page-style.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.widgets.js"></script>

<style>

.code-block-holder pre {
      max-height: 188px;  
      min-height: 188px; 
      overflow: auto;
      border: 1px solid #ccc;
      border-radius: 5px;
}


.tab-btn-holder {
    width: 100%;
    margin: 20px 0 0;
    border-bottom: 1px solid #dfe3e4;
    min-height: 30px;
}

.tab-btn-holder a {
    background-color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    color: #006bb8;
    text-decoration: none;
    display: inline-block;
    *zoom:1; *display:inline;


}

.tab-btn-holder a.active {
    color: #858585;
    padding: 9px 10px 8px;
    border: 1px solid #dfe3e4;
    border-bottom: 1px solid #fff;
    margin-bottom: -1px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    position: relative;
    z-index: 300;
}

</style>

</head>
<body>
	<?php

    /**
    * This example describes the single level linked chart preparation using FusionCharts PHP wrapper
    */

    // Including the wrapper file in the page
	include_once("fusioncharts.php");

    // Preparing the object of FusionCharts with needed informations
    /**
    * The parameters of the constructor are as follows
    * chartType   {String}  The type of chart that you intend to plot. e.g. Column3D, Column2D, Pie2D etc.
    * chartId     {String}  Id for the chart, using which it will be recognized in the HTML page. Each chart on the page should have a unique Id.
    * chartWidth  {String}  Intended width for the chart (in pixels). e.g. 400
    * chartHeight {String}  Intended height for the chart (in pixels). e.g. 300
    * containerId {String}  The id of the chart container. e.g. chart-1
    * dataFormat  {String}  Type of data used to render the chart. e.g. json, jsonurl, xml, xmlurl
    * dataSource  {String}  Actual data for the chart. e.g. {"chart":{},"data":[{"label":"Jan","value":"420000"}]}
    */
	$ganttChart = new FusionCharts("column2d", "ex1" , "100%", "300", "chart-1", "json", '{
      "chart": {
        "caption": "Урожайность по годам",
        "subcaption": "Кликните на колонку, чтобы просмотреть подробности",
        "yaxisname": "Урожай",
        "formatnumberscale": "1",
        "plotgradientcolor": " ",
        "bgcolor": "FFFFFF",
        "showalternatehgridcolor": "0",
        "showplotborder": "0",
        "showvalues": "1",
        "divlinecolor": "CCCCCC",
        "divlinedashed": "1",
        "showcanvasborder": "0",
        "defaultnumberscale": "Тонн",
        "yAxisMaxValue": "585000",
        "numberscaleunit": "Тонн,EB",
        "palettecolors": "34495e ",
        "captionPadding": "20",
        "showborder": "0",
        "plotToolText": "<div><b>$label</b><br/>Тонн : <b>$datavalue</b></div>",
      },
      "data": [{
        "label": "2017",
        "value": "387500",
        "link": "newchart-json-2017-type"
      }, {
        "label": "2018",
        "value": "261000",
        "link": "newchart-json-2018-type"
      }, {
        "label": "2019",
        "value": "335483",
        "link": "newchart-json-2019-type"
      }, {
        "label": "2020",
        "value": "467978",
        "link": "newchart-json-2020-type"
      }],
      "linkeddata": [{
        "id": "2017-type",
        "linkedchart": {
          "chart": {
            "caption": "План/Факт, 2017",
            "subcaption": "ГОРОХ",
            "formatnumberscale": "1",
            "plotgradientcolor": " ",
            "bgcolor": "FFFFFF",
            "yaxismaxvalue": "550000",
            "showalternatehgridcolor": "0",
            "showplotborder": "0",
            "showvalues": "1",
            "labeldisplay": "WRAP",
            "divlinecolor": "CCCCCC",
            "divlinedashed": "1",
            "showcanvasborder": "0",
            "captionPadding": "20",
            "defaultnumberscale": "Тонн",
            "numberscalevalue": "1024,1024",
            "numberscaleunit": "Тонн",
            "palettecolors": "34495e"
          },
          "data": [{
            "label": "План",
            "value": "405000"
          }, {
            "label": "Факт",
            "value": "387500"
          }, {
            "label": "Внесено",
            "value": "36000"
          }]
        }
      }, {
        "id": "2018-type",
        "linkedchart": {
          "chart": {
            "caption": "План/Факт, 2018 ",
            "subcaption": "ОЗИМАЯ ПШЕНИЦА",
            "formatnumberscale": "1",
            "plotgradientcolor": " ",
            "yaxismaxvalue": "550000",
            "bgcolor": "FFFFFF",
            "showalternatehgridcolor": "0",
            "showplotborder": "0",
            "showvalues": "1",
            "labeldisplay": "WRAP",
            "divlinecolor": "CCCCCC",
            "divlinedashed": "1",
            "showcanvasborder": "0",
            "captionPadding": "20",
            "defaultnumberscale": "Тонн",
            "numberscalevalue": "1024,1024",
            "numberscaleunit": "Тонн",
            "palettecolors": "721242"
          },
          "data": [{
            "label": "План",
            "value": "261000"
          }, {
            "label": "Факт",
            "value": "0"
          }, {
            "label": "Внесено",
            "value": "0"
          }]
        }
      }, {
        "id": "2019-type",
        "linkedchart": {
          "chart": {
            "caption": "План/Факт, 2019",
            "subcaption": "-",
            "formatnumberscale": "1",
            "plotgradientcolor": " ",
            "bgcolor": "FFFFFF",
            "showalternatehgridcolor": "0",
            "showplotborder": "0",
            "yaxismaxvalue": "75000",
            "showvalues": "1",
            "labeldisplay": "WRAP",
            "divlinecolor": "CCCCCC",
            "divlinedashed": "1",
            "showcanvasborder": "0",
            "captionPadding": "20",
            "defaultnumberscale": "Тонн",
            "numberscalevalue": "1024,1024",
            "numberscaleunit": "Тонн,EB",
            "palettecolors": "34495e"
          },
          "data": [{
            "label": "План",
            "value": "0"
          }, {
            "label": "Факт",
            "value": "0"
          }, {
            "label": "Внесено",
            "value": "0"
          }]
        }
      }, {
        "id": "2020-type",
        "linkedchart": {
          "chart": {
            "caption": "План/Факт, 2020",
            "subcaption": "-",
            "formatnumberscale": "1",
            "plotgradientcolor": " ",
            "bgcolor": "FFFFFF",
            "showalternatehgridcolor": "0",
            "showplotborder": "0",
            "yaxismaxvalue": "75000",
            "showvalues": "1",
            "labeldisplay": "WRAP",
            "divlinecolor": "CCCCCC",
            "divlinedashed": "1",
            "showcanvasborder": "0",
            "captionPadding": "20",
            "defaultnumberscale": "Тонн",
            "numberscalevalue": "1024,1024",
            "numberscaleunit": "Тонн,EB",
            "palettecolors": "34495e"
          },
          "data": [{
            "label": "План",
            "value": "0"
          }, {
            "label": "Факт",
            "value": "0"
          }, {
            "label": "Внесено",
            "value": "0"
          }]
        }
      }]
    }');
	// Render the chart
	$ganttChart->render();
?>
<div class="live-chart-wrapper">
<span id="chart-1" class="chart" style="height:500px"><!-- Fusion Charts will render here--></span>

</div>

</body>
</html>


