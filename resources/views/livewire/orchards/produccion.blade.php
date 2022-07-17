<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/tailwind.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/diseno.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>

<body>
    @if (session()->has('message'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
        <div class="flex">
            <div>
                <p class="text-sm">{{ session('message') }}</p>
            </div>
        </div>
    </div>
    @endif
    <div class="pt-6 px-4">
        <a class="bg-green-700 text-white font-bold py-2 px-4 rounded my-3 w-20" href="{{route('open_an_prod',$datos->id)}}"><i class="fa-solid fa-plus"></i>Agregar</a>
        @include('livewire.orchards.create_an_prod')
    </div>

    <div class="p-4">
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
                    categories: ['inicio año', 'Ene', 'Feb', 'Mar', 'Abril', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
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
    </div>

    <div class="p-4">
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
                    categories: ['inicio año', 'Ene', 'Feb', 'Mar', 'Abril', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
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
    </div>

</body>

</html>
