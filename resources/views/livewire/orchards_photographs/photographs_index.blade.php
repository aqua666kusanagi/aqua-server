<div class="fixed z-10 inset-0 overflow-y-auto " aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 ">

        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " onclick="Previous()" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen "></span>

        <div class="relative inline-block bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all w-2/3 content-start">
            <div class="">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

                    <div class="py-4">
                        <div class="rounded-full bg-green-100 px-4 pl-6 py-2 border w-full">
                            <h3 class="text-center px-2 py-2 ">FOTOGRAFIAS DEL HUERTO</h3>
                            <p class=" text-center">{{ $nombre_huerto }}</p>
                        </div>
                    </div>

                    <div class=" overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 bg-gray-200 my-8  mb-20 ">
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
                        <!-- Poner el espaciado -->
                        <div class="flex justify-between ">
                            <div>
                                <button class="ease-in duration-300 bg-primary text-white font-bold py-2 px-4 rounded my-3 " onclick="Previous()">Regresar</button>
                                <script>
                                    function Previous() {
                                        window.history.back()
                                    }
                                </script>
                            </div>



                            <div class="">
                                <div class="grid justify-items-center">

                                    <div class="rounded-full flex bg-gray-100 px-8 py-2">
                                        <div class="flex px-4">
                                            <i class="fas fa-angle-left nav rounded-full p-4 bg-gray-100 hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-300" wire:click="decrementar('m')"></i>
                                            <div class="px-2 text-2xl mt-2">{{ $meses[$countMes] }}</div>
                                            <i class="fas fa-angle-right nav rounded-full p-4 bg-gray-100 hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-300" wire:click="incrementar('m')"></i>
                                        </div>

                                        <div class="flex px-4">
                                            <i class="fas fa-angle-left nav rounded-full p-4 bg-gray-100 hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-300" wire:click="decrementar('a')"></i>
                                            <div class=" px-2 text-2xl mt-2"><span class="year">{{ $anio }}</span></div>
                                            <i class="fas fa-angle-right nav rounded-full p-4 bg-gray-100 hover:bg-gray-300 active:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-300" wire:click="incrementar('a')"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <button wire:click="create()" class=" duration-300 bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>
                                @if($isDialogOpen)
                                @include('livewire.orchards_photographs.create')
                                @endif
                            </div>
                        </div>


                        <div class="padd grid gap-4 grid-cols-3 ">
                            @foreach($photographs as $foto)
                            <div class="rounded-lg  ring-opacity-50 shadow-lg shadow-cyan-500/50 ">
                                <ul role="list" class="lg:grid grid grid-cols-1 gap-6 ">
                                    <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                        <div class="">
                                            <!--Imagen-->
                                            <div class="grid justify-items-center py-4">
                                                <img class=" w-5/6 object-cover object-center rounded-lg shadow-md" alt="Image no vista" src="{{url("storage/".$foto->path)}}">
                                            </div>
                                        </div>
                                        <!--Informacion de la imagen-->
                                        <div class="max-w-sm rounded overflow-hidden ">
                                            <div class="px-6 py-4">
                                                <p class=" ml-6 text-gray-500 text-sm truncate text-center">{{ $foto->type_photo->type_photograph }}</p>
                                                <p class="ml-6 truncate text-center">{{ $foto->date }}</p>
                                                <p class="text-gray-700 text-base">
                                                    <td class="border px-4 py-2">{{ $foto->note }}</td>
                                                </p>
                                            </div>
                                        </div>
                                        <!--Botones-->
                                        <div>
                                            <div class=" flex ">
                                                <div class=" flex-1 flex">
                                                    <a class="relative flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                        <button wire:click="edit({{ $foto->id }})" class="bg-green-700 hover:bg-green-800 text-white py-2 px-4 rounded-full ml-3"><i class="fa-solid fa-pen-to-square"></i></button>
                                                    </a>
                                                    <a class="relative flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                        <button wire:click="ConfirmaDelete({{ $foto->id }})" class="bg-red-700 text-white font-bold py-2 px-4 rounded-full hover:bg-red-600"><i class="fa-solid fa-trash-can"></i></button>
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
        </div>
    </div>
</div>