
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVA PRODUCCION ANUAL </title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/tailwind.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/diseno.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


    <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closeModalPopover()" aria-hidden="true"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                <div>
                    <div class="mx-auto flex items-center justify-center h-12 w-full rounded-full bg-gray-50">
                        <!-- Heroicon name: outline/check -->
                        {{--<svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>--}}
                        <h3 class="items-center">NUEVA PRODUCCION ANUAL</h3>
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <div class="mt-2">
                            <!--FORMULARIO-->
                            <form enctype="multipart/form-data">
                                <div class="shadow sm:rounded-md sm:overflow-hidden ">
                                    <div class=" sm:rounded-md sm:overflow-hidden shadow-lg shadow-indigo-500/40">
                                        <div class="bg-white py-6 px-4 space-y-6 sm:p-6 ">
                                            <div class="grid grid-cols-6 gap-6">


                                                <div class="col-span-6 ">
                                                    <div class="pt-2 pr-4">
                                                        <h3 class="block text-sm font-medium text-gray-700 text-center">Toneladas de Cosecha</h3>
                                                        <select wire:model="ton_harvest" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">Toneladas de Cosecha</option>
                                                            @for($var=0; $var<=1000;$var=$var+1) <option type="int" value="{{$var}}">{{$var}} Toneladas</option>
                                                                @endfor
                                                        </select>
                                                        @error('ton_harvest') <span class="text-red-500">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-span-6 ">
                                                    <div class="pt-2 pr-4">
                                                        <h3 class="block text-sm font-medium text-gray-700 text-center">Fecha de Produccion</h3>
                                                        <div class=" ">
                                                            <input type="date" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Fecha de Produccion" wire:model="date_production">
                                                        </div>
                                                        @error('date_production') <span class="text-red-500">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-span-6 ">
                                                    <div class="pt-2 pr-4">
                                                        <h3 class="block text-sm font-medium text-gray-700 text-center">Ventas</h3>
                                                        <div class=" ">
                                                            <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ventas" wire:model="sale">
                                                        </div>
                                                        @error('sale') <span class="text-red-500">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-span-6 ">
                                                    <div class="pt-2 pr-4">
                                                        <h3 class="block text-sm font-medium text-gray-700 text-center">Porcentaje de Daño</h3>
                                                        <select wire:model="damage_percentage" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">Porcentaje de Daño</option>
                                                            @for($var=0; $var<=100;$var=$var+1) <option type="int" value="{{$var}}"> {{$var}} %</option>
                                                                @endfor
                                                        </select>
                                                        @error('damage_percentage') <span class="text-red-500">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-4 py-3 bg-gray-100 sm:px-6 flex justify-center">
                                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto bg-red-700 ">
                                        <button wire:click="closeModalPopover()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                            Cerrar
                                        </button>
                                    </span>
                                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto bg-green-700  text-white font-bold">
                                        <a  href="{{route('store_an_prod',)}}" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2  text-base leading-6 font-bold text-white shadow-sm  hover:bg-green-800 focus:outline-none focus:border-green-900 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Agregar</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</html>
