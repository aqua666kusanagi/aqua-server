<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="py-4">
            <div class="rounded-full bg-green-100 px-4 pl-6 py-2 border w-full">
                <h3 class="text-center px-2 py-2 ">MUESTRA NITRUCIONAL</h3>
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
            @include('livewire.sample_nutrients.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="px-4 py-2 w-20"></th>
                        <th class="px-4 py-2">Analisis</th>
                        <th class="px-4 py-2">Unidades</th>
                        <th class="px-4 py-2">Elemento Quimico</th>
                        <th class="px-4 py-2">porcentage</th>
                        <th class="px-4 py-2">lote</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sample as $nutri)
                    <tr>
                        <td class="border px-4 py-2">{{ $nutri->id }}</td>
                        <td class="border px-4 py-2">{{ $nutri->nutrient_analysis->date_sample }}</td>
                        <td class="border px-4 py-2">{{ $nutri->units->description}}</td>
                        <td class="border px-4 py-2">{{ $nutri->chemical_elements->chemical_code}}</td>
                        <td class="border px-4 py-2">{{ $nutri->sale }}</td>
                        <td class="border px-4 py-2">{{ $nutri->damage_percentage }}</td>

                        <td class="border px-4 py-2">
                            <div class="flex justify-between">
                                <div>
                                    <button wire:click="edit({{ $nutri->id }})" class="bg-green-700 text-white font-bold py-2 px-4"><i class="fa-solid fa-pen-to-square"></i></button>
                                </div>
                                <div>
                                    <button wire:click="delete({{ $nutri->id }})" class="bg-red-700 text-white font-bold py-2 px-4"><i class="fa-solid fa-trash-can"></i></button>
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