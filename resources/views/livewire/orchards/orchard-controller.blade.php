<div class="py-6">
    <div class=" mx-auto sm:px-6 lg:px-8 ">
        <div class="padd bg-white overflow-hidden shadow-xl sm:rounded-lg px- py-4">
            <!-- ALgo de seccion-->
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        <!--<button wire:click="create()"
                    class="bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>-->
            <div class="flex items-center justify-between  dark:border-primary-darker px- py-4 sm:rounded-lg padd" style="background-image:url({{asset('images/fondoaguacate.jpg')}});">
                <h1 class="text-2xl font-semibold text-gray-200">HUERTOS HASS</h1>
                <button wire:click="create()" class="bg-primary text-white font-bold py-2 px-4 rounded my-3 "><i class="fa-solid fa-plus"></i></button>
            </div>

            @if($isDialogOpen)
                @include('livewire.orchards.create')
            @endif
            <div class="padd grid gap-4 grid-cols-3 ">
                @foreach($orchard as $orchards)
                    <div class="rounded-lg ring-4 ring-green-500 ring-opacity-50 shadow-lg shadow-cyan-500/50" wire:click="edit({{ $orchards->id }})">

                        <ul role="list" class="lg:grid grid grid-cols-1 gap-6 ">
                            <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200 ">
                                <div class="w-full flex items-center justify-between p-6 space-x-6">
                                    <div class="flex-1 truncate">
                                        <div class=" items-center space-x-3">
                                            <div class="ml-6 truncate ">{{ $orchards->name_orchard }}</div>
                                        <!--   <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{Auth::user()->name}}</span>   -->
                                        </div>
                                        <div class=" ml-6 text-gray-500 text-sm truncate">{{ $orchards->location_orchard }}</div>
                                    </div>
                                    <img class="w-20 h-20 bg-gray-300 rounded-full flex-shrink-0" src="{{url("storage/".$orchards->path_image)}}" alt="">
                                </div>
                                <div>
                                    <div class="-mt-px flex divide-x divide-gray-200">
                                        <div class="w-0 flex-1 flex">
                                            <a  class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">


                                                <button wire:click="edit({{ $orchards->id }})" class="bg-green-700 text-white py-2 px-4 rounded-full ml-3"><i class="fa-solid fa-pen-to-square"> EDITAR</i></button>
                                            </a>
                                        </div>
                                        <div class="w-0 flex-1 flex">
                                            <a  class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                <button wire:click="ConfirmaDelete({{ $orchards->id }})"
                                                        class="bg-red-700 text-white font-bold py-2 px-4 rounded-full"><i class="fa-solid fa-trash-can"> ELIMINAR</i></button>
                                                {{--<button wire:click="$emit('openModal', 'confirm-delete')">Open Modal</button>--}}
                                                @if($isconfirm)
                                                    @include('livewire.confirm-delete')
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
