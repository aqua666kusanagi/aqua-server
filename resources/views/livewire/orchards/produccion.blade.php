<button wire:click="create()" class="bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>


<h1>Toneladas cosechadas</h1>
<div id="chart-container"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    var datas = <?php echo json_encode($datas) ?>

    Highcharts.chart('chart-container', {
        title: {
            text: 'Grafico del 2022'
        },
        subtitle: {
            text: 'toneladas y costos de venta'
        },
        xAxis: {
            categories: ['inicio año','Ene', 'Feb', 'Mar', 'Abril', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Numero de toneladas vendidas'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Toneladas',
            data: datas
        }],

        responsive: {
            rules: [{
                condition: {
                    maxwidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizonal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>



<h1>Costo de venta por tonelada</h1>
<div id="chart-containers"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    var datass = <?php echo json_encode($datass) ?>

    Highcharts.chart('chart-containers', {
        title: {
            text: 'Grafico del 2022'
        },
        subtitle: {
            text: 'toneladas y costos de venta'
        },
        xAxis: {
            categories: ['inicio año','Ene', 'Feb', 'Mar', 'Abril', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Costo de venta de toneladas'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'costo',
            data: datass
        }],

        responsive: {
            rules: [{
                condition: {
                    maxwidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizonal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>