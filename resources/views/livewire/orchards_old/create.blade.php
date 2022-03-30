<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " wire:click="closeModalPopover()" aria-hidden="true"></div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>


        <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
            <div>
                <div class="mx-auto flex items-center justify-center h-12 w-full rounded-full bg-gray-50">

                    <h3 class="items-center">NUEVO MODO DE APLICACION</h3>
                </div>
                <div class="mt-3 text-center sm:mt-5">
                    <div class="mt-2">
                        <!--FORMULARIO-->
                        <form>
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                                <select wire:model="type_avocado_id" class="form-control">
                                    <option value="">--Tipo de Aguacate--</option>
                                    @foreach($type_avocados as $type_avocado)

                                        <option type="int" value="{{$type_avocado->id}}">{{$type_avocado->type_avocado}}
                                        </option>
                                    @endforeach
                                </select>

                                <select wire:model="type_topography_id" class="form-control">
                                    <option value="">--Tipo de Topografia--</option>
                                    @foreach($type_topographies as $type_topopraphy)

                                        <option type="int" value="{{$type_topopraphy->id}}">{{$type_topopraphy->type_topography}}
                                        </option>
                                    @endforeach
                                </select>

                                <select wire:model="type_soil_id" class="form-control">
                                    <option value="">--Tipo de Suelo--</option>
                                    @foreach($type_soils as $type_soil)

                                        <option type="int" value="{{$type_soil->id}}">{{$type_soil->type_soil}}
                                        </option>
                                    @endforeach
                                </select>

                                <select wire:model="climate_type_id" class="form-control">
                                    <option value="">--Tipo de Clima--</option>
                                    @foreach($climate_types as $climate_type)

                                        <option type="int" value="{{$climate_type->id}}">{{$climate_type->climate_type}}
                                        </option>
                                    @endforeach
                                </select>

                                <select wire:model="user_id" class="form-control">
                                    <option value="">--Usuario--</option>
                                    @foreach($users as $users)

                                        <option type="int" value="{{$users->id}}">{{$users->name}}
                                        </option>
                                    @endforeach
                                </select>




                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Nombre de Huerto" wire:model="name_orchard">
                                        @error('name_orchard') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Path image" wire:model="path_image">
                                        @error('path_image') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Localizacion de Huerto" wire:model="location_orchard">
                                        @error('location_orchard') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Point" wire:model="point">
                                        @error('point') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Area" wire:model="area">
                                        @error('area') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Altitud" wire:model="altitude">
                                        @error('altitude') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Superficie" wire:model="surface">
                                        @error('surface') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Estado" wire:model="state">
                                        @error('state') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Año de Creacion" wire:model="creation_year">
                                        @error('creation_year') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Densidad de Plantado" wire:model="planting_density">
                                        @error('planting_density') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-4">
                                        <input type="text" class="sshadow appearance-none border w-full" placeholder="Irrigacion" wire:model="irrigation">
                                        @error('irrigation') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                            </div>


                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Guardar
                        </button>
                    </span>
                                <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModalPopover()" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-bold text-gray-700 shadow-sm hover:text-gray-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cerrar
                        </button>
                    </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

