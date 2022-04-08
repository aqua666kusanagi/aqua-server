<div class="py-6">
    <div class=" mx-auto sm:px-6 lg:px-8 ">
        <div class="padd bg-white overflow-hidden shadow-xl sm:rounded-lg px- py-4" style="background-image:url({{asset('images/fondoaguacate.jpg')}});">
            <!-- ALgo de seccion-->
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                     role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        <!--<button wire:click="create()"
                    class="bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>-->
            <div class="flex items-center justify-between  dark:border-primary-darker">
                <h1 class="text-2xl font-semibold text-gray-200">HUERTOS HAS</h1>
                <button wire:click="create()"
                        class="bg-primary text-white font-bold py-2 px-4 rounded my-3 "><i class="fa-solid fa-plus"></i></button>
            </div>

            @if($isDialogOpen)
                @include('livewire.orchards.create')
            @endif
            <div class="padd grid gap-4 grid-cols-3">
                @foreach($orchard as $orchards)
                    <div class="subitem">
                        <div class="flexin">
                            <h3 class="mb-4 padd text-lg">Tipo de clima:</h3>
                            <div class="mb-4 textin">{{ $orchards->climate_types->climate_type ?? 0 }}</div>

                            <h3 class="mb-4 padd text-lg">Nombre huerto:</h3>
                            <div class="mb-4 textin">{{ $orchards->name_orchard }}</div>

                            <h3 class="mb-4 padd text-lg">Localizacion:</h3>
                            <div class="mb-4 textin">{{ $orchards->location_orchard }}</div>

                            {{--<div class="border mb-4">{{ $orchards->point }}</div>
                            <div class="border mb-4">{{ $orchards->area }}</div>--}}
                            <h3 class="mb-4 padd text-lg">Altitud:</h3>
                            <div class="mb-4 textin">{{ $orchards->altitude }}</div>

                            <h3 class="mb-4 padd text-lg">Superficie:</h3>
                            <div class="mb-4 textin">{{ $orchards->surface }}</div>

                            <h3 class="mb-4 padd text-lg">Estado:</h3>
                            <div class="mb-4 textin">{{ $orchards->state }}</div>

                            <h3 class="mb-4 padd text-lg">Año de creacion:</h3>
                            <div class="mb-4 textin">{{ $orchards->creation_year }}</div>

                            <h3 class="mb-4 padd text-lg">Dencidad de plantacion</h3>
                            <div class="mb-4 textin">{{ $orchards->planting_density }}</div>

                            <h3 class="mb-4 padd text-lg">Riego:</h3>
                            <div class="mb-4 textin">{{ $orchards->irrigation }}</div>
                        </div>

                        <div class="mb-4 padd">
                            <div class="flex justify-between">
                                <div>
                                    <button wire:click="edit({{ $orchards->id }})"
                                            class="bg-green-700 text-white font-bold py-2 px-4 rounded-full"><i class="fa-solid fa-pen-to-square"></i></button>
                                </div>
                                <div>
                                    <button wire:click="delete({{ $orchards->id }})"
                                            class="bg-red-700 text-white font-bold py-2 px-4 rounded-full"><i class="fa-solid fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
