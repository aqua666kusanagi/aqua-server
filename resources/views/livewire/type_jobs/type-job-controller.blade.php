<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
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
            <button wire:click="create()"
                    class="bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Tipo Trabajo</button>
            @if($isDialogOpen)
                @include('livewire.type_jobs.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                <tr class="bg-gray-300">
                    <th class="px-4 py-2 w-20">Numero</th>
                    <th class="px-4 py-2">Tipo de Trabajo</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Jobs as $job)
                    <tr>
                        <td class="border px-4 py-2">{{ $job->id }}</td>
                        <td class="border px-4 py-2">{{ $job->type_job }}</td>
                        <td class="border px-4 py-2">
                            <div class="flex justify-between">
                                <div class="">
                                    <button wire:click="edit({{ $job->id }})"
                                            class="bg-green-700 text-white font-bold py-2 px-4"><i class="fa-solid fa-pen-to-square"></i></button>
                                </div>
                                <div>
                                    <button wire:click="delete({{ $job->id }})"
                                            class="bg-red-700 text-white font-bold py-2 px-4"><i class="fa-solid fa-trash-can"></i></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
