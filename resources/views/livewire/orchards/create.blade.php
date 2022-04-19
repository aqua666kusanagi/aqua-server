<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closeModalPopover()" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>


        <div class="relative  inline-block align-bottom bg-white  text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle  w-full">

            <div class="px-4">



                <div class=" ">
                    <div class="mt-6 border-b lg:py-6 flex items-center justify-center h-12 w-full rounded-full ring-4 ring-green-500  shadow-lg ">
                        <h3 class="items-center">HUERTO</h3>
                    </div>
                </div>



                <div class="bg-green-500 grid grid-cols-3 gap-4  mt-6 border-b lg:py-6  mb-8  px-6  ring-4   ">

                    <div class="col-span-3 ">
                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Nombre del Huerto</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Nombre de Huerto" wire:model="name_orchard">
                            </div>
                            @error('name_orchard') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="col-span-2  ">
                        <div class="pt-2 pr-4 flex">

                            <h3 class="block text-sm font-medium text-gray-700 pr-4">Tipo de Aguacate</h3>
                            <select wire:model="type_avocado_id" class="sshadow appearance-none border rounded-full w-full ">
                                <option value="">--seleccionar--</option>
                                @foreach($type_avocados as $type_avocado)
                                <option type="int" value="{{$type_avocado->id}}">{{$type_avocado->type_avocado}}
                                </option>
                                @endforeach
                            </select>
                            
                        </div>
                        @error('type_avocado_id') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>


                    <div class="">
                        <div class="pt-2 pr-4 flex">

                            <h3 class="block text-sm font-medium text-gray-700 pr-4">Tipo de Topografia</h3>
                            <select wire:model="type_topography_id" class="sshadow appearance-none border rounded-full w-full">
                                <option value="">--seleccionar--</option>
                                @foreach($type_topographies as $type_topopraphy)
                                <option type="int" value="{{$type_topopraphy->id}}">{{$type_topopraphy->type_topography}}
                                </option>
                                @endforeach
                            </select>
                           
                        </div>
                        @error('type_topography_id') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>


                    <div class="">
                        <div class="pt-2 pr-4 flex">

                            <h3 class="block text-sm font-medium text-gray-700 pr-4">Tipo de Suelo</h3>
                            <select wire:model="type_soil_id" class="sshadow appearance-none border rounded-full w-full">
                                <option value="">--seleccionar--</option>
                                @foreach($type_soils as $type_soil)
                                <option type="int" value="{{$type_soil->id}}">{{$type_soil->type_soil}}
                                </option>
                                @endforeach
                            </select>
                            
                        </div>
                        @error('type_soil_id') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>








                    <div class="col-span-2">
                        <div class="pt-2 pr-4 flex">

                            <h3 class="block text-sm font-medium text-gray-700 pr-4">Tipo de Clima</h3>
                            <select wire:model="climate_type_id" class="sshadow appearance-none border rounded-full w-full">
                                <option value="">--seleccionar--</option>
                                @foreach($climate_types as $climate_type)
                                <option type="int" value="{{$climate_type->id}}">{{$climate_type->climate_type}}
                                </option>
                                @endforeach
                            </select>
                            
                        </div>
                        @error('climate_type_id') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>


                    <!-- USUARIO
                    <div class="">
                        <div class="pt-2 pr-4 flex">

                            <h3 class="block text-sm font-medium text-gray-700 pr-4">Usuario</h3>
                            <select wire:model="user_id" class="sshadow appearance-none border rounded-full w-full">
                                <option value="">--seleccionar--</option>
                                @foreach($users as $users)
                                <option type="int" value="{{$users->id}}">{{$users->name}}
                                </option>
                                @endforeach
                            </select>
                            
                        </div>
                        @error('user_id') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    -->








                    <div class="col-span-3  ring-4 ring-green-500 ring-opacity-50 shadow-lg shadow-cyan-500/50">

                        <label class="block text-sm font-medium text-gray-700"> Cargar Imagen </label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md ">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
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


                    <div class="col-span-2">

                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Ubicacion</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Localizacion de Huerto" wire:model="location_orchard">
                            </div>
                            @error('location_orchard') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="">

                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Punto</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Point" wire:model="point">
                            </div>
                            @error('point') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="">

                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Area</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Area" wire:model="area">
                            </div>
                            @error('area') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>



                    <div class="col-span-2">

                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Altitud</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Altitud" wire:model="altitude">
                            </div>
                            @error('altitude') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>



                    <div class="">

                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Superficie</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Superficie" wire:model="surface">
                            </div>
                            @error('surface') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="">

                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Estado</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Estado" wire:model="state">
                            </div>
                            @error('state') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="">

                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Año de Creacion</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Año de Creacion" wire:model="creation_year">
                            </div>
                            @error('creation_year') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="">

                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Densidad de plantado</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Densidad de Plantado" wire:model="planting_density">
                            </div>
                            @error('planting_density') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>



                    <div class="">
                        <div class="pt-2 pr-4">
                            <h3 class="block text-sm font-medium text-gray-700">Irrigacion</h3>
                            <div class="">
                                <input type="text" class="sshadow appearance-none border  rounded-full w-full" placeholder="Irrigacion" wire:model="irrigation">
                            </div>

                            @error('irrigation') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>





                </div>


                <div class="bg-gray-50 px-4 py-3 sm:px-6 flex">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Guardar
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModalPopover()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cerrar
                        </button>
                    </span>
                </div>



            </div>


        </div>
    </div>
</div>