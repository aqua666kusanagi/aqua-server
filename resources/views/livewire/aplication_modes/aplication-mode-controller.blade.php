<x-slot name="header">
    <h2 class="text-center">Laravel JetStream Livewire CRUD Aplication Modes</h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
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
            <button wire:click="create()"
                    class="bg-indigo-500 text-white font-bold py-2 px-4 rounded my-3">Add Aplication Mode</button>
            @if($isDialogOpen)
                @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 w-20">No.</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($aplication as $aplicacion)
                    <tr>
                        <td class="border px-4 py-2">{{ $aplicacion->id }}</td>
                        <td class="border px-4 py-2">{{ $aplicacion->description }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $aplicacion->id }})"
                                    class="bg-green-700 text-white font-bold py-2 px-4">Edit</button>
                            <button wire:click="delete({{ $aplicacion->id }})"
                                    class="bg-red-700 text-white font-bold py-2 px-4">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
