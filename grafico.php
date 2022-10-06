<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafico dos Projetos</title>
</head>

<body>

<script>
  var btn = document.getElementById("refresh");
  function carregar(){
    window.location.reload(true);
  }
    setInterval(function(){
      carregar()
    }, 15000);
  
</script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
   

    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div><br>
    

    <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    
    <script>
        

var myData = <?php include_once "gerarDadosGrafico.php"; ?>;
Highcharts.chart('container2', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Média dos Projetos'
  },
  xAxis: {
    categories: myData.map( x => x.name),
    crosshair: true
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Notas'
    }
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: 'Médias',
    data: myData.map( x => x.value )
  }]
});


//-------GRAFICO DE PIZZA--------

var pieData = <?php include "GerarDadosPizza.php"; ?>;


Highcharts.chart('container', {
  chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: false,
    type: 'pie'
  },
  title: {
    text: 'Quantidade de Projetos que possuem uma respectiva média'
  },
  tooltip: {
    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
  },
  plotOptions: {
    pie: {
      allowPointSelect: true,
      cursor: 'pointer',
      dataLabels: {
        enabled: true,
        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
        style: {
          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
        }
      }
    }
  },
  series: [{
    name: 'porcentagem de avaliações',
    colorByPoint: true,
    data: pieData
  }]
});
    </script>

<?php include "gerarTabela.php";?>





</body>
</html>