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
                                <h3 class="text-center px-2 py-2 ">FOTOGRAFIAS</h3>
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
                            <div class="flex ">
                                <div>
                                    <button wire:click="create()" class="bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>
                                    @if($isDialogOpen)
                                    @include('livewire.orchards_photographs.create')
                                    @endif
                                </div>
                                <div>
                                    <button class="bg-primary text-white font-bold py-2 px-4 rounded my-3 " onclick="Previous()">Regresar</button>
                                    <script>
                                        function Previous() {
                                            window.history.back()
                                        }
                                    </script>
                                </div>
                            </div>

                            <div class="padd grid gap-4 grid-cols-3 ">
                                @foreach($photographs as $foto)
                                <div class="rounded-lg ring-4 ring-green-500 ring-opacity-50 shadow-lg shadow-cyan-500/50">

                                    <ul role="list" class="lg:grid grid grid-cols-1 gap-6 ">
                                        <li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200 ">
                                            <div class="w-full flex items-center justify-between p-6 space-x-6">
                                                <div class="flex-1 truncate">
                                                    <div class=" items-center space-x-3">
                                                        <div class="ml-6 truncate ">{{ $foto->orchard->name_orchard }}</div>
                                                        <!--   <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{Auth::user()->name}}</span>   -->
                                                    </div>
                                                    <div class=" ml-6 text-gray-500 text-sm truncate">{{ $foto->type_photo->type_photograph }}</div>
                                                    <td class="border px-4 py-2">{{ $foto->date }}</td>

                                                </div>
                                                <td>
                                                    <img class="w-20 h-20 bg-gray-300 rounded-full flex-shrink-0" alt="Image no vista" src="{{url("storage/".$foto->path)}}">
                                                </td>

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