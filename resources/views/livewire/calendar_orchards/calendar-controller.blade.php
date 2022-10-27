<div>
    <script src="https://cdn.tailwindcss.com"></script>
    @include('livewire.orchards.acciones_huerto')
    <script>
        show_nav(), calend()
    </script>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex h-full flex-col">
        <header class="relative z-20 flex flex-none items-center justify-between border-b border border-gray-200 py-2 px-6 my-3" style="border-top: 2px solid #8cdeaa; white-space: normal">
            <div class="">
                <h1 class="text-lg font-semibold leading-6 text-gray-900">
                    <time class="sm:hidden">{{ $dia }} {{ $mespanish }} {{ $data['year'] }}</time>
                    <time class="hidden sm:inline">{{ $dia }} {{ $mespanish }} {{ $data['year'] }}</time>
                </h1>
                <p class="mt-1 text-sm text-gray-900">{{$datos_orchard->name_orchard}} , Localización: {{$datos_orchard->location_orchard}} , Año de creación: {{$datos_orchard->creation_year}}</p>
            </div>
            <div class="flex items-center w-48">
                <div class="ml-6 h-6 w-px bg-gray-300"></div>
                <div x-data="{ isActive: true, open: false}">
                    <button type="button" @click="$event.preventDefault(); open = !open" role="button" aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'"
                            class="focus:outline-none ml-6 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        + Agregar
                    </button>

                    <div role="menu" x-show="open" class="border border-gray-300 my-3 rounded-lg" style="margin-left: 15px">
                        <a href="{{route('photograph',$datos_orchard->id)}}" type="button" class="bg-gray-200 w-full">
                            <button type="button" class="py-2 bg-gray-200 border border-gray-300 w-full px-3">+ Galeria Fotos</button>
                        </a>
                        <a href="{{route('produccion',$datos_orchard->id)}}" type="button" class="bg-gray-200 w-full">
                            <button type="button" class="py-2 bg-gray-200 border border-gray-300 w-full px-3">+ Produccion</button>
                        </a>
                        <a href="{{route('fenofase',$datos_orchard->id)}}" type="button" class="bg-gray-200 w-full">
                            <button type="button" class="py-2 bg-gray-200 border border-gray-300 w-full px-3">+ Fenofase</button>
                        </a>
                    </div>
                    @if($modal)
                        @include('livewire.calendar_orchards.create_worday_activity')
                    @endif
                </div>
            </div>
        </header>

        <div class="flex flex-auto overflow-hidden bg-white">
            <div class="flex flex-auto flex-col overflow-auto">
                {{--------------------------------------------------Dias en mobil-------------------------------------}}
                <div class="sticky top-0 z-10 grid flex-none grid-cols-7 bg-white text-xs text-gray-500 shadow ring-1 ring-black ring-opacity-5 md:hidden">
                    <button type="button" class="flex flex-col items-center pt-3 pb-1.5">
                        <span>W</span>
                        <!-- Default: "text-gray-900", Selected: "bg-gray-900 text-white", Today (Not Selected): "text-indigo-600", Today (Selected): "bg-indigo-600 text-white" -->
                        <span class="mt-3 flex h-8 w-8 items-center justify-center rounded-full text-base font-semibold text-gray-900">19</span>
                    </button>
                    <button type="button" class="flex flex-col items-center pt-3 pb-1.5">
                        <span>T</span>
                        <span class="mt-3 flex h-8 w-8 items-center justify-center rounded-full text-base font-semibold text-indigo-600">20</span>
                    </button>
                    <button type="button" class="flex flex-col items-center pt-3 pb-1.5">
                        <span>F</span>
                        <span class="mt-3 flex h-8 w-8 items-center justify-center rounded-full text-base font-semibold text-gray-900">21</span>
                    </button>
                    <button type="button" class="flex flex-col items-center pt-3 pb-1.5">
                        <span>S</span>
                        <span class="mt-3 flex h-8 w-8 items-center justify-center rounded-full bg-gray-900 text-base font-semibold text-white">22</span>
                    </button>
                    <button type="button" class="flex flex-col items-center pt-3 pb-1.5">
                        <span>S</span>
                        <span class="mt-3 flex h-8 w-8 items-center justify-center rounded-full text-base font-semibold text-gray-900">23</span>
                    </button>
                    <button type="button" class="flex flex-col items-center pt-3 pb-1.5">
                        <span>M</span>
                        <span class="mt-3 flex h-8 w-8 items-center justify-center rounded-full text-base font-semibold text-gray-900">24</span>
                    </button>
                    <button type="button" class="flex flex-col items-center pt-3 pb-1.5">
                        <span>T</span>
                        <span class="mt-3 flex h-8 w-8 items-center justify-center rounded-full text-base font-semibold text-gray-900">25</span>
                    </button>
                </div>
                {{-------------------------------------------MESES FENOFASES------------------------------------------}}
                <div class="flex w-full flex-auto">
                    <div class="w-16 flex-none bg-white ring-1 ring-gray-100"></div>
                    <div class="grid flex-auto grid-cols-1 grid-rows-1">
                        <!-- Horizontal lines -->
                        <div class="col-start-1 col-end-2 row-start-1 grid divide-y divide-gray-200" style="grid-template-rows: repeat(24, minmax(2rem, 1fr))">
                            {{--<div class="row-start-1"></div>--}}
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">ENE-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">FEB-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">MAR-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">ABR-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">MAY-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">JUN-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">JUL-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">AGO-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">SEP-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">OCT-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">NOV-></div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">DIC-></div>
                            </div>
                            <div class="h-4"></div>
                            <div class="h-4"></div>
                        </div>

                        <!-- Events -->
                        <ol class="col-start-1 col-end-2 row-start-1 grid grid-cols-1" style="grid-template-rows: 2rem repeat(24, minmax(0, 1fr)) auto">
                            @php($fila=0);@endphp
                            @php($span=0);@endphp

                            <li class="relative mt-px flex" style="grid-row: 2 / span 2 ">
                                <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-blue-50 p-2 text-xs leading-5 hover:bg-blue-100">
                                    <p class="order-1 font-semibold text-blue-700">FENOFASE 1</p>
                                    <p class="text-blue-500 group-hover:text-blue-700"><time datetime="2022-01-22T06:00">6:00 AM</time></p>
                                </a>
                            </li>
                            <li class="relative mt-px flex" style="grid-row: 12 / span 2">
                                <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-pink-50 p-2 text-xs leading-5 hover:bg-pink-100">
                                    <p class="order-1 font-semibold text-pink-700">FENOFASE 2</p>
                                    {{--<p class="order-1 text-pink-500 group-hover:text-pink-700">John F. Kennedy International Airport</p>--}}
                                    <p class="text-pink-500 group-hover:text-pink-700"><time datetime="2022-01-22T07:30">7:30 AM</time></p>
                                </a>
                            </li>
                            <li class="relative mt-px flex" style="grid-row: 20 / span 2">
                                <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-indigo-50 p-2 text-xs leading-5 hover:bg-indigo-100">
                                    <p class="order-1 font-semibold text-indigo-700">FENOFASE 3</p>
                                    {{--<p class="order-1 text-indigo-500 group-hover:text-indigo-700">Eiffel Tower</p>--}}
                                    <p class="text-indigo-500 group-hover:text-indigo-700"><time datetime="2022-01-22T11:00">11:00 AM</time></p>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            {{-----------------------------------------------DIAS-CALENDARIO-----------------------------------------------------}}
            <div class="hidden w-1/2 flex-none border-l border-gray-100 py-10 px-8 md:block">
                <div>
                    <div class="flex items-center text-center text-gray-900 w-1/2">
                        <button type="button" wire:click="last_year()" class="-m-1.5 flex flex-none items-center justify-center p-1.5 text-gray-600 hover:text-gray-900">
                            <span class="sr-only">Previous month</span>
                            <!-- Heroicon name: solid/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="flex-auto font-semibold">{{ $mespanish }} {{ $data['year'] }}</div>
                        <button type="button" wire:click="next_year()" class="-m-1.5 flex flex-none items-center justify-center p-1.5 text-gray-600 hover:text-gray-900">
                            <span class="sr-only">Next month</span>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 grid grid-cols-7 text-center text-xs leading-6 text-gray-500">
                        <div>Lunes</div>
                        <div>Martes</div>
                        <div>Miercoles</div>
                        <div>Jueves</div>
                        <div>Viernes</div>
                        <div>Sabado</div>
                        <div>Domingo</div>
                    </div>
                    <div class="isolate mt-2 grid grid-cols-7 gap-px rounded-lg bg-gray-200 text-sm shadow ring-1 ring-gray-200">
                        @foreach($data['calendar'] as $semanas)
                        {{--HEAD--}}
                            @foreach($semanas['datos'] as $dias)
                                @if($dias['mes'] == $mesingles)
                                    @if($dias['dia'] == $dia)
                                        @if($dias['mes'] == $mes_actual)
                                            @php $bantoday=true;@endphp
                                            @foreach($workdays as $work)
                                                @if($dias['fecha'] == $work->date_work)
                                                    <form class="w-full" action="">
                                                        <button type="button" {{--wire:click="edit_activiti('{{$work->id}}')"--}} class="w-full bg-gray-500 border border-gray-100  py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                                            <time class="mx-auto flex h-7 w-7 items-center justify-center rounded-full bg-indigo-500 font-semibold">{{$dias['dia']}}</time>
                                                        </button>
                                                    </form>
                                                    @php $bantoday=false;@endphp
                                                @endif
                                            @endforeach
                                            @if($bantoday)
                                                <form class="w-full" action="">
                                                    <button type="button" wire:click="openmodal('{{$dias['fecha']}}')" class="w-full bg-gray-500 border border-gray-100  py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10 hover:border-gray-900">
                                                        <time class="mx-auto flex h-7 w-7 items-center justify-center rounded-full font-semibold">{{$dias['dia']}}</time>
                                                    </button>
                                                </form>
                                            @endif
                                        @endif
                                    @else
                                        @php $ban=true;@endphp
                                        @foreach($workdays as $work)
                                            @if($work->date_work == $dias['fecha'])
                                                <form action="">
                                                    <button type="button" {{--wire:click="edit_activiti('{{$work->id}}')"--}} class="w-full bg-white border border-gray-100  py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                                        <time class="mx-auto flex h-7 w-7 items-center justify-center rounded-full bg-indigo-500">{{$dias['dia']}}</time>
                                                    </button>
                                                </form>
                                                @php $ban=false;@endphp
                                            @endif
                                        @endforeach
                                        @if($ban)
                                            <form action="">
                                                <button type="button" wire:click="openmodal('{{$dias['fecha']}}')" class="w-full bg-white border border-gray-100  py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10 hover:border-gray-900">
                                                    <time class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">{{$dias['dia']}}</time>
                                                </button>
                                            </form>
                                        @endif
                                    @endif
                                @else
                                    <button type="button" class="bg-gray-100 border border-gray-200 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                        <time class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">{{$dias['dia']}}</time>
                                    </button>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <div class="py-8">
                    @include('livewire.calendar_orchards.workday_activity')
                </div>
            </div>
            {{--++++++++++++++++++++++++++++++++++++++++++++ACTIVIDADES++++++++++++++++++++++++++++++++++++++++++--}}
        </div>
    </div>
</div>
