<div class="">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="py-4">
            <div class="rounded-full bg-green-100 px-4 pl-6 py-2 border w-full">
                <h3 class="text-center px-2 py-2 ">SUPLEMENTOS</h3>
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
            <button wire:click="create()" class="bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>
            @if($isDialogOpen)
                @include('livewire.supplies.create')
            @endif
            {{--****FERTILIZANTES, INZECTICIDASA, AGUA, ABONO************************************************************************************************--}}
            <div class="container border py-4 my-4 grid grid-cols-3 gap-4 px-2 py-2">
                @foreach($supply as $supplies)
                    <div class="border grid grid-cols-3 gap-4 rounded border-teal-500">
                        <div class="col-start-1 col-span-2 text-center">
                            <div>{{ $supplies->name }}</div>
                            <div>{{ $supplies->registry_number }}</div>
                            <div>{{ $supplies->data_sheet }}</div>
                            <div>{{ $supplies->security_term }}</div>
                            <div>{{ $supplies->product_categori->description}}</div>
                            <div class="flex justify-between">
                                <div>
                                    <button wire:click="edit({{ $supplies->id }})" class="bg-green-700 text-white font-bold py-2 px-4 rounded-full"><i class="fa-solid fa-pen-to-square"></i></button>
                                </div>
                                <div>
                                    <button wire:click="ConfirmaDelete({{ $supplies->id }})"
                                            class="bg-red-700 text-white font-bold py-2 px-4 rounded-full"><i class="fa-solid fa-trash-can"></i></button>
                                    {{--<button wire:click="$emit('openModal', 'confirm-delete')">Open Modal</button>--}}
                                    @if($isconfirm)
                                        @include('livewire.confirm-delete')
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="py-10 px-4">
                            <img class="rounded-full" src="{{url('images/avatar.jpg')}}" alt="" width="70px" height="70px">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
