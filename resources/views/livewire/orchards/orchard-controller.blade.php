<div class="py-6">
    <div class=" mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px- py-4" style="background-image:url({{asset('images/fondo2.jpg')}});">
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
                <h1 class="text-2xl font-semibold">HUERTOS HAS</h1>
                <button wire:click="create()"
                        class="bg-primary text-white font-bold py-2 px-4 rounded my-3 "><i class="fa-solid fa-plus"></i></button>
            </div>

            @if($isDialogOpen)
                @include('livewire.orchards.create')
            @endif
            <div class="container item_container">
                @foreach($orchard as $orchards)
                    <div class="subitem">
                        <div class="border mb-4">{{ $orchards->name_orchard }}</div>
                        <div class="border mb-4">{{ $orchards->location_orchard }}</div>
                        {{--<div class="border mb-4">{{ $orchards->point }}</div>
                        <div class="border mb-4">{{ $orchards->area }}</div>--}}
                        <div class="border mb-4">{{ $orchards->altitude }}</div>
                        <div class="border mb-4">{{ $orchards->surface }}</div>
                        <div class="border mb-4">{{ $orchards->state }}</div>
                        <div class="border mb-4">{{ $orchards->creation_year }}</div>
                        <div class="border mb-4">{{ $orchards->planting_density }}</div>
                        <div class="border mb-4">{{ $orchards->irrigation }}</div>

                        <div class="border mb-4">
                            <div class="flex justify-between">
                                <div>
                                    <button wire:click="edit({{ $orchards->id }})"
                                            class="bg-green-700 text-white font-bold py-2 px-4"><i class="fa-solid fa-pen-to-square"></i></button>
                                </div>
                                <div>
                                    <button wire:click="delete({{ $orchards->id }})"
                                            class="bg-red-700 text-white font-bold py-2 px-4"><i class="fa-solid fa-trash-can"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
