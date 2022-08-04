<div class="py-12">
    @include('livewire.orchards.acciones_huerto')

    <script>show_nav(), produ()</script>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="py-4">
            <div class="rounded-full bg-green-100 px-4 pl-6 py-2 border w-full">
                <h3 class="text-center px-2 py-2 ">Produccion Anuales</h3>
            </div>
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 pt-6">
            <!-- ALgo de seccion-->
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <button wire:click="create()" class="bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>
            @if($isModalOpen)
                @include('livewire.annual_productions.create')
            @endif


            <h1>Toneladas cosechadas</h1>
            <div id="chart-container"></div>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script>
                var datas = <?php echo json_encode($datas) ?>

                Highcharts.chart('chart-container', {
                    title: {
                        text: 'Grafico del 2022'
                    },
                    xAxis: {
                        categories: ['Ene', 'Feb', 'Mar', 'Abril', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
                    },
                    yAxis: {
                        title: {
                            text: 'Numero de toneladas vendidas'
                        }
                    },

                    series: [{
                        name: 'Toneladas',
                        data: datas
                    }],


                });
            </script>


        </div>
    </div>
</div>
