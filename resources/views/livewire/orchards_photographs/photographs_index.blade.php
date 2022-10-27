<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-black opacity-50 transition-opacity " type="button" value="GoBack" onclick="Previous()"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="relative inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle w-full sm:p-6">
            <div>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                        <div class="py-4">
                            <div class="rounded-full bg-green-100 px-4 pl-6 py-2 border w-full">
                                <h3 class="text-center px-2 py-2 ">FOTOGRAFIAS DEL HUERTO</h3>
                                <p class=" text-center">{{ $nombre_huerto }}</p>
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
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
                            <div class="flex justify-between">
                                <div>
                                    <button class="bg-primary text-white font-bold py-2 px-4 rounded my-3 " onclick="Previous()">Regresar</button>
                                    <script>
                                        function Previous() {
                                            window.history.back()
                                        }
                                    </script>
                                </div>
                                <div>
                                    <button wire:click="create()" class="ease-in-out duration-300 bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>
                                    @if($isDialogOpen)
                                    @include('livewire.orchards_photographs.create')
                                    @endif
                                </div>
                            </div>

                            <div class="padd grid gap-4 grid-cols-3 ">
                                @foreach($photographs as $foto)
                                <div class="rounded-lg  ring-opacity-50 shadow-lg shadow-cyan-500/50">

                                    <ul role="list" class="lg:grid grid grid-cols-1 gap-6 ">
                                        <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                                            <div class="max-w-sm rounded overflow-hidden ">
                                                <div class="border-y-4 border-green-200">
                                                    <img width="350px" height="350px" class=" rounded " alt="Image no vista" src="{{url("storage/".$foto->path)}}">
                                                </div>

                                                <div class="px-6 py-4">
                                                    <p class=" ml-6 text-gray-500 text-sm truncate text-center">{{ $foto->type_photo->type_photograph }}</p>
                                                    <p class="ml-6 truncate text-center">{{ $foto->date }}</p>
                                                    <p class="text-gray-700 text-base">
                                                        <td class="border px-4 py-2">{{ $foto->note }}</td>
                                                    </p>
                                                </div>
                                                <!--
                                                <div class="px-6 pt-4 pb-2">
                                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                                </div>
                                    -->

                                            </div>
                                            <div>
                                                <div class="-mt-px flex divide-x divide-gray-200">
                                                    <div class="w-0 flex-1 flex">
                                                        <a class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                                            <button wire:click="edit({{ $foto->id }})" class="bg-green-700 hover:bg-green-800 text-white py-2 px-4 rounded-full ml-3"><i class="fa-solid fa-pen-to-square"></i></button>
                                                        </a>
                                                        <a class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
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
</div>