<div>
    <script src="https://cdn.tailwindcss.com"></script>
    @include('livewire.orchards.acciones_huerto')
    <script>show_nav(), activi()</script>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex h-full flex-col">
        <header class="relative z-20 flex flex-none items-center justify-between border-b border-gray-200 py-4 px-6">
            <div>
                <h1 class="text-lg font-semibold leading-6 text-gray-900">
                    <time class="sm:hidden">{{$fecha}}</time>
                    <time class="hidden sm:inline">{{ $dia }} {{ $mespanish }} {{ $data['year'] }}</time>
                </h1>
                <p class="mt-1 text-sm text-gray-500">Nombre Semana</p>
            </div>
            <div class="flex items-center">
                {{--
                <div class="flex items-center rounded-md shadow-sm md:items-stretch">
                    <button type="button" class="flex items-center justify-center rounded-l-md border border-r-0 border-gray-300 bg-white py-2 pl-3 pr-4 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                        <span class="sr-only">Dia Anterior</span>
                        <!-- Heroicon name: solid/chevron-left -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button type="button" class="hidden border-t border-b border-gray-300 bg-white px-3.5 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 focus:relative md:block">Hoy</button>
                    <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
                    <button type="button" class="flex items-center justify-center rounded-r-md border border-l-0 border-gray-300 bg-white py-2 pl-4 pr-3 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:px-2 md:hover:bg-gray-50">
                        <span class="sr-only">Dia Siguiente</span>
                        <!-- Heroicon name: solid/chevron-right -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="hidden md:ml-4 md:flex md:items-center">
                    <div class="relative">
                        <button onclick="item_nav_show()" type="button" class="flex items-center rounded-md border border-gray-300 bg-white py-2 pl-3 pr-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">
                            Calendario
                            <!-- Heroicon name: solid/chevron-down -->
                            <svg class="ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="contenido_dentro" class="focus:outline-none absolute right-0 mt-3 w-36 origin-top-right overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5"    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="#" onclick="item_nav()" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Semana</a>
                                <a href="#" onclick="item_nav()" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Mes</a>
                                <a href="#" onclick="item_nav()" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Año</a>
                            </div>
                        </div>
                        <script>item_nav()</script>
                    </div>

                </div>
                --}}
                <div class="ml-6 h-6 w-px bg-gray-300"></div>
                <button type="button" class="focus:outline-none ml-6 rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">+ Evento</button>

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
                {{-------------------------------------------------------HORAS----------------------------------------}}
                <div class="flex w-full flex-auto">
                    <div class="w-14 flex-none bg-white ring-1 ring-gray-100"></div>
                    <div class="grid flex-auto grid-cols-1 grid-rows-1">
                        <!-- Horizontal lines -->
                        <div class="col-start-1 col-end-2 row-start-1 grid divide-y divide-gray-200" style="grid-template-rows: repeat(48, minmax(3.5rem, 1fr))">
                            <div class="row-end-1 h-7"></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">12AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">1AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">2AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">3AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">4AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">5AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">6AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">7AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">8AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">9AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">10AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">11AM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">12PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">1PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">2PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">3PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">4PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">5PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">6PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">7PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">8PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">9PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">10PM</div>
                            </div>
                            <div></div>
                            <div>
                                <div class="-mt-2.5 -ml-14 w-14 pr-2 text-right text-xs leading-5 ">11PM</div>
                            </div>
                            <div></div>
                        </div>

                        <!-- Events -->
                        <ol class="col-start-1 col-end-2 row-start-1 grid grid-cols-1" style="grid-template-rows: 1.75rem repeat(288, minmax(0, 1fr)) auto">
                            <li class="relative mt-px flex" style="grid-row: 74 / span 12">
                                <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-blue-50 p-2 text-xs leading-5 hover:bg-blue-100">
                                    <p class="order-1 font-semibold text-blue-700">Breakfast</p>
                                    <p class="text-blue-500 group-hover:text-blue-700"><time datetime="2022-01-22T06:00">6:00 AM</time></p>
                                </a>
                            </li>
                            <li class="relative mt-px flex" style="grid-row: 92 / span 30">
                                <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-pink-50 p-2 text-xs leading-5 hover:bg-pink-100">
                                    <p class="order-1 font-semibold text-pink-700">Flight to Paris</p>
                                    <p class="order-1 text-pink-500 group-hover:text-pink-700">John F. Kennedy International Airport</p>
                                    <p class="text-pink-500 group-hover:text-pink-700"><time datetime="2022-01-22T07:30">7:30 AM</time></p>
                                </a>
                            </li>
                            <li class="relative mt-px flex" style="grid-row: 134 / span 18">
                                <a href="#" class="group absolute inset-1 flex flex-col overflow-y-auto rounded-lg bg-indigo-50 p-2 text-xs leading-5 hover:bg-indigo-100">
                                    <p class="order-1 font-semibold text-indigo-700">Sightseeing</p>
                                    <p class="order-1 text-indigo-500 group-hover:text-indigo-700">Eiffel Tower</p>
                                    <p class="text-indigo-500 group-hover:text-indigo-700"><time datetime="2022-01-22T11:00">11:00 AM</time></p>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            {{-----------------------------------------------DIAS-----------------------------------------------------}}
            <div class="hidden w-1/2 flex-none border-l border-gray-100 py-10 px-8 md:block">
                <div class="flex items-center text-center text-gray-900 w-1/2">
                        <button type="button" wire:click="last_year()" class="-m-1.5 flex flex-none items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Previous month</span>
                            <!-- Heroicon name: solid/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    <div class="flex-auto font-semibold">{{ $mespanish }} {{ $data['year'] }}</div>
                        <button type="button" wire:click="next_year()" class="-m-1.5 flex flex-none items-center justify-center p-1.5 text-gray-400 hover:text-gray-500">
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
                        @foreach($semanas['datos'] as $dias)
                            @if($dias['mes'] == $mesingles)
                                @if($dias['dia'] == $dia)
                                <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                    <time class="mx-auto flex h-7 w-7 items-center justify-center rounded-full bg-gray-900 font-semibold text-white">{{$dias['dia']}}</time>
                                </button>
                                @else
                                <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                                    <time class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">{{$dias['dia']}}</time>
                                </button>
                                @endif
                            @else
                                <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                                    <time class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">...</time>
                                </button>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div>
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
            <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-01-17" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">17</time>
            </button>
            <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-01-18" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">18</time>
            </button>
            <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-01-19" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">19</time>
            </button>
            <button type="button" class="bg-white py-1.5 font-semibold text-indigo-600 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-01-20" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">20</time>
            </button>
            <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-01-21" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">21</time>
            </button>
            <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-01-22" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full bg-gray-900 font-semibold text-white">22</time>
            </button>
            <button type="button" class="bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-01-23" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">23</time>
            </button>
            <button type="button" class="rounded-bl-lg bg-white py-1.5 text-gray-900 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-01-31" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">31</time>
            </button>
            <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-02-01" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">1</time>
            </button>
            <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-02-02" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">2</time>
            </button>
            <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-02-03" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">3</time>
            </button>
            <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-02-04" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">4</time>
            </button>
            <button type="button" class="bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-02-05" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">5</time>
            </button>
            <button type="button" class="rounded-br-lg bg-gray-50 py-1.5 text-gray-400 hover:bg-gray-100 focus:z-10">
                <time datetime="2022-02-06" class="mx-auto flex h-7 w-7 items-center justify-center rounded-full">6</time>
            </button>
        </div>
    </div>

</div>
