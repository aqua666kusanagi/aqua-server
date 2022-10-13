<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closemodal()" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
            <div>
                <div class="justify-center   rounded-full bg-gray-100">
                    <h3 class="text-center px-2 py-2 bg-green-100 rounded-full">Actividades para el dia {{$date_work}}</h3>
                </div>
                    {{----------------------------------------------ACTIVIDADES---------------------------------------}}
                <div id="Actividad" class="border rounded-lg my-4">
                    <form>
                        @if($modalworkday)
                            <div class="px-7">
                                @if($clicksave)
                                    <div class="flex justify-between w-full">
                                        @if($clickedit)
                                            <div class="pt-2 pr-4">
                                                <h3 class="block text-sm font-medium text-gray-700 text-center">Fecha de trabajo</h3>
                                                <div class=" ">
                                                    <input type="date" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Dia a trabajar" wire:model="date_work">
                                                </div>
                                                @error('date_work') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        @endif
                                        <h3 class="pt-2 pr-4 block text-sm font-medium text-gray-700 text-center">Gastos Generales</h3>
                                        <div class="pt-2 pr-4">
                                            <div class=" ">
                                                <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ingrese Cantidad" wire:model="general_expenses">
                                            </div>
                                            @error('general_expenses') <span class="text-red-500">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="flex justify-between w-full pt-2 pr-4">
                                        <h3 class="py-3 block text-sm font-medium text-gray-700 text-center">Descripcción</h3>
                                        <div class="w-5"></div>
                                        <div>
                                            <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="pt-2 pr-4 flex justify-end">
                                        <button wire:click.prevent="storeworkday()" class="text-center text-white bg-green-700 mt-1 block border border-gray-300 rounded-md shadow-sm py-1.5 px-3"><i class="fa-solid fa-angles-right"></i></button>
                                    </div>
                                @endif
                            </div>
                            <div>
                                @if($clicksave == false)
                                    <div class="shadow sm:rounded-md sm:overflow-hidden ">
                                        <div class="sm:rounded-md sm:overflow-hidden shadow-lg shadow-indigo-500/40">
                                            <div class="bg-white py-6 px-3 w-full">
                                                <div class="flex justify-between w-full">
                                                    <div class="pt-2 pr-4">
                                                        <h3 class="block text-sm font-medium text-gray-700 text-center">Actividad</h3>
                                                        <select wire:model="type_job_id" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">Selecciona Opción</option>
                                                            @foreach($type_jobs as $type_job)
                                                                <option type="int" value="{{$type_job->id}}">{{$type_job->type_job}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('type_job_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                                    </div>
                                                    <div class="pt-2 pr-4">
                                                        <h3 class="block text-sm font-medium text-gray-700 text-center">Costo/actividad</h3>
                                                        <div class="flex justify-between ">
                                                            <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Dia a trabajar" wire:model="cost">
                                                        </div>
                                                        @error('cost') <span class="text-red-500">{{ $message }}</span>@enderror
                                                    </div>
                                                    <div>
                                                        <div class="py-2"></div>
                                                        <div class="py-1.5"></div>
                                                        <button wire:click.prevent="storeactiviti()" class="text-center text-white bg-green-700 mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-1.5 px-3"><i class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                                <div class="py-5">
                                                    <div class="flex justify-between text-center bg-gray-500">
                                                        <div class="w-1/2">Actividad</div>
                                                        <div class="w-1/2">Costo</div>
                                                    </div>
                                                    @if($table_activities)
                                                        @foreach($activitiesxday as $acti)
                                                            <div class="flex justify-between text-center bg-gray-200 border-gray-700">
                                                                <div class="w-1/2">
                                                                    {{$acti->typejob->type_job}}
                                                                </div>
                                                                <div class="w-1/2">
                                                                    {{$acti->cost}}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-100 sm:px-6 flex justify-center">
                                        <span class=" bg-red-700 mt-3 flex  rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                            <button wire:click="closemodal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-600 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                                Cerrar
                                            </button>
                                        </span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </form>
                </div>
                    {{-----------------------------------------------PRODUCCION---------------------------------------}}
            </div>
        </div>
    </div>
</div>




