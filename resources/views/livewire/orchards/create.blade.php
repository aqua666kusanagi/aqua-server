<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closeModalPopover()" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>


        <div class="relative rounded-lg inline-block align-bottom bg-white  text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle  w-full">

            <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
                <div class="space-y-2 sm:px-6 lg:px-0 lg:col-span-9">
                    <form enctype="multipart/form-data">

                        <div class=" bg-white py-6 px-4 space-y-6 sm:p-6 ">
                            <div class="mt-6  lg:py-6 flex items-center justify-center h-12 w-full rounded-lg ring-4 ring-green-500 ring-opacity-50 ">
                                <h3 class="items-center text-black text-2xl">HUERTO</h3>
                            </div>
                            <p class="mt-1 text-sm text-blue-600 items-center text-center">-----------------------------Una vez creado, podras ver la informacion en cada momento que lo desees-----------------------------</p>
                        </div>

                        <div class="shadow sm:rounded-md sm:overflow-hidden ">
                            <div class=" sm:rounded-md sm:overflow-hidden shadow-lg shadow-indigo-500/40">
                                <div class="bg-white py-6 px-4 space-y-6 sm:p-6 ">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6 ">
                                            <div class="pt-2 pr-4">
                                                <h3 class="block text-sm font-medium text-gray-700 text-center">Nombre del Huerto</h3>
                                                <div class=" ">
                                                    <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nombre de Huerto" wire:model="name_orchard">
                                                </div>
                                                @error('name_orchard') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-3">
                                            <div class="pt-2 pr-4 ">
                                                <h3 class="text-center block text-sm font-medium text-gray-700 pr-4">Tipo de Aguacate</h3>
                                                <select wire:model="type_avocado_id" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">Selecciona Opción</option>
                                                    @foreach($type_avocados as $type_avocado)
                                                    <option type="int" value="{{$type_avocado->id}}">{{$type_avocado->type_avocado}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('type_avocado_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                        </div>

                                        <div class=" col-start-4 col-span-3">
                                            <div class="pt-2 pr-4 ">
                                                <h3 class="text-center block text-sm font-medium text-gray-700 pr-4">Tipo de Topografia</h3>
                                                <select wire:model="type_topography_id" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">Selecciona Opción</option>
                                                    @foreach($type_topographies as $type_topopraphy)
                                                    <option type="int" value="{{$type_topopraphy->id}}">{{$type_topopraphy->type_topography}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('type_topography_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                        </div>


                                        <div class=" col-start-1 col-span-3">
                                            <div class="pt-2 pr-4 ">
                                                <h3 class="text-center block text-sm font-medium text-gray-700 pr-4">Tipo de Suelo</h3>
                                                <select wire:model="type_soil_id" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">Selecciona Opción</option>
                                                    @foreach($type_soils as $type_soil)
                                                    <option type="int" value="{{$type_soil->id}}">{{$type_soil->type_soil}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('type_soil_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                        </div>

                                        <div class="col-start-4 col-span-3 sm:col-span-3">
                                            <div class="pt-2 pr-4 flex">
                                                <h3 class="text-center block text-sm font-medium text-gray-700 pr-4">Tipo de Clima</h3>
                                                <select wire:model="climate_type_id" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">Selecciona Opción</option>
                                                    @foreach($climate_types as $climate_type)
                                                    <option type="int" value="{{$climate_type->id}}">{{$climate_type->climate_type}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('climate_type_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                        </div>


                                        {{--
                                            <div class="">
                                                <div class="pt-2 pr-4 flex">
                                                    <h3 class="text-center block text-sm font-medium text-gray-700 pr-4">Usuario</h3>
                                                    <select wire:model="user_id" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">--seleccionar--</option>
                                                        @foreach($users as $users)
                                                        <option type="int" value="{{$users->id}}">{{$users->name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('user_id') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                            --}}


                                        <div class="rounded-lg col-span-6  ">
                                            <label class="text-center block text-sm font-medium text-gray-700"> Cargar Imagen </label>
                                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md ">
                                                <div class="space-y-1 text-center items-center">
                                                    @if ($path_image)
                                                    <img src="{{$path_image->TemporaryUrl() }}" alt="preview image" width="100px" height="100px">
                                                    @else
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    @endif

                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Cargar Imagen</span>
                                                            <input id="file-upload" name="file-upload" type="file" class="sr-only" class="sshadow appearance-none border rounded-full" placeholder="Path image" wire:model="path_image">
                                                        </label>
                                                        <p class="pl-1"> o arrastrar y soltar </p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF hasta 10MB</p>
                                                </div>
                                            </div>
                                            @error('path_image') <span class="text-red-500">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    {{--****************************************************************************--}}
                                    <div class="grid grid-cols-6 gap-4  px-7 w-full">
                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700">Ubicacion</h3>
                                                <div class="">
                                                    <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Localizacion de Huerto" wire:model="location_orchard">
                                                </div>
                                                @error('location_orchard') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700">Punto</h3>
                                                <div class="">
                                                    <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Point" wire:model="point">
                                                </div>
                                                @error('point') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700">Area</h3>
                                                <div class="">
                                                    <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Area" wire:model="area">
                                                </div>
                                                @error('area') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700">Altitud</h3>
                                                <div class="">
                                                    <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Altitud" wire:model="altitude">
                                                </div>
                                                @error('altitude') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700">Superficie</h3>
                                                <div class="">
                                                    <div class="">
                                                        <select wire:model="surface" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            <option value="">Superficie</option>
                                                            @for($var=1; $var<=200;$var=$var+1)
                                                                <option type="int" value="{{$var}}"> {{$var}} mts</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                                @error('surface') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700">Estado</h3>
                                                <div class="">
                                                    <input type="text" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Estado" wire:model="state">
                                                </div>
                                                @error('state') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700">Año de Creacion</h3>
                                                <div class="">
                                                    <select wire:model="creation_year" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">Año de creacion</option>
                                                        @for($var=1980; $var<=2022;$var=$var+1)
                                                            <option type="int" value="{{$var}}"> {{$var}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                @error('creation_year') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700">Densidad de plantado</h3>
                                                <div class="">
                                                    <select wire:model="planting_density" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">Densidad de Plantado</option>
                                                        @for($var=1; $var<=10;$var=$var+1)
                                                            <option type="int" value="{{$var}}"> {{$var}} hectareas</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                @error('planting_density') <span class="text-red-500">{{ $message }}</span>@enderror
                                            </div>
                                        </div>

                                        <div class="col-start-1 col-span-2">
                                            <div class="pt-2 pr-4">
                                                <h3 class="text-center block text-sm font-medium text-gray-700 pr-4">¿Se riega?</h3>
                                                <select type="text" wire:model="irrigation" class="text-center mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            @error('irrigation') <span class="text-red-500">{{ $message }}</span>@enderror
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="px-4 py-3 bg-gray-100 sm:px-6 flex justify-center">
                                <span class=" bg-red-700 mt-3 flex  rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                    <button wire:click="closeModalPopover()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-600 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                        Cerrar
                                    </button>
                                </span>
                                <span class="px-7"></span>
                                <span class="bg-green-700 hover:bg- text-white font-bold flex   rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                    <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2  text-base leading-6 font-bold text-white shadow-sm  hover:bg-green-800 focus:outline-none focus:border-green-900 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                        Guardar
                                    </button>
                                </span>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
