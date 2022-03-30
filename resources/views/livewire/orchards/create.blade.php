<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closeModalPopover()" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="relative inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle  w-full">
            <div class="">
                <div class="mx-auto flex items-center justify-center h-12 w-full rounded-full bg-gray-50">
                    <h3 class="items-center">HUERTO</h3>
                </div>

                <div class=" flex flex-wrap px-4  ">



                    <div class="py-2 flex">
                        <h3 class="items-center ">Tipo de Aguacate</h3>
                        <div class="pt-2 pr-4">

                            <select wire:model="type_avocado_id" class="rounded-full pr-4">
                                <option value="">--Tipo de Aguacate--</option>
                                @foreach($type_avocados as $type_avocado)
                                <option type="int" value="{{$type_avocado->id}}">{{$type_avocado->type_avocado}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="py-2 flex">
                        <h3 class="items-center ">Tipo de Topografia</h3>
                        <div class="pt-2 pr-4">
                            <select wire:model="type_topography_id" class="rounded-full pr-4">
                                <option value="">--Tipo de Topografia--</option>
                                @foreach($type_topographies as $type_topopraphy)

                                <option type="int" value="{{$type_topopraphy->id}}">{{$type_topopraphy->type_topography}}
                                </option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="py-2 flex">
                        <h3 class="items-center ">Tipo de Suelo</h3>
                        <div class="pt-2 pr-4">
                            <select wire:model="type_soil_id" class="rounded-full pr-4 ">
                                <option value="">--Tipo de Suelo--</option>
                                @foreach($type_soils as $type_soil)

                                <option type="int" value="{{$type_soil->id}}">{{$type_soil->type_soil}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>















                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Tipo de Clima</h3>
                        <select wire:model="climate_type_id" class="rounded-full ">
                            <option value="">--Tipo de Clima--</option>
                            @foreach($climate_types as $climate_type)

                            <option type="int" value="{{$climate_type->id}}">{{$climate_type->climate_type}}
                            </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Usuario</h3>
                        <select wire:model="user_id" class="rounded-full ">
                            <option value="">--Usuario--</option>
                            @foreach($users as $users)

                            <option type="int" value="{{$users->id}}">{{$users->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>







                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Nombre del Huerto</h3>
                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Nombre de Huerto" wire:model="name_orchard">

                            </div>
                            @error('name_orchard') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>

                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Imagen</h3>
                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border rounded-full" placeholder="Path image" wire:model="path_image">

                            </div>
                            @error('path_image') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Ubicacion</h3>
                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Localizacion de Huerto" wire:model="location_orchard">

                            </div>
                            @error('location_orchard') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>

                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Punto</h3>
                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Point" wire:model="point">

                            </div>
                            @error('point') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>

                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Area</h3>
                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Area" wire:model="area">

                            </div>
                            @error('area') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>

                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Altitud</h3>
                        <div>
                            <div class="sshadow appearance-none border rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Altitud" wire:model="altitude">

                            </div>
                            @error('altitude') <span class="text-red-500">{{ $message }}</span>@enderror

                        </div>

                    </div>


                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Superficie</h3>

                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Superficie" wire:model="surface">

                            </div>
                            @error('surface') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Estado</h3>
                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Estado" wire:model="state">

                            </div>
                            @error('state') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>

                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Año de Creacion</h3>
                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Año de Creacion" wire:model="creation_year">

                            </div>
                            @error('creation_year') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>
                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Densidad de plantado</h3>
                        <div>

                            <div class="sshadow appearance-none border rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Densidad de Plantado" wire:model="planting_density">

                            </div>
                            @error('planting_density') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>


                    <div class="py-2 flex">
                        <h3 class="items-center pt-2 pr-4">Irrigacion</h3>
                        <div>
                            <div class="sshadow appearance-none border  rounded-full">
                                <input type="text" class="sshadow appearance-none border  rounded-full" placeholder="Irrigacion" wire:model="irrigation">
                            </div>
                            @error('irrigation') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                    </div>





                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
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