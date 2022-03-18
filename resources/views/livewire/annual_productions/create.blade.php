<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-85"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                    <select wire:model="orchard_id" class="form-control">
                        <option value="">--Huerto--</option>
                        @foreach($orchard as $orchard_annuals)

                        <option type="int" value="{{$orchard_annuals->id}}">{{$orchard_annuals->name}}
                        </option>
                        @endforeach
                    </select>


                    <div class="">
                        <div class="mb-4">
                            <input type="text" class="sshadow appearance-none border w-full" placeholder="Toneladas de cosecha" wire:model="ton_harvest">
                            @error('ton_harvest') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="">
                        <div class="mb-4">
                            <input type="text" class="sshadow appearance-none border w-full" placeholder="Fecha de produccion" wire:model="date_production">
                            @error('date_production') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="">
                        <div class="mb-4">
                            <input type="text" class="sshadow appearance-none border w-full" placeholder="Ventas" wire:model="sale">
                            @error('sale') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="">
                        <div class="mb-4">
                            <input type="text" class="sshadow appearance-none border w-full" placeholder="Porcentaje de Daño" wire:model="damage_percentage">
                            @error('damage_percentage') <span class="text-red-500">{{ $message }}</span>@enderror
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
