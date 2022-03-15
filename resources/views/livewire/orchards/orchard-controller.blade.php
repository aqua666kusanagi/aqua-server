<div class="py-6">
    <div class=" mx-auto sm:px-6 lg:px-8">
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
                    class="bg-primary text-white font-bold py-2 px-4 rounded my-3"><i class="fa-solid fa-plus"></i> Agregar</button>
            @if($isDialogOpen)
                @include('livewire.orchards.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                <tr class="bg-gray-300">
                    <th class="px-4 py-2 w-20">Numero</th>
                    <th class="px-4 py-2">Tipo de Aguacate </th>
                    <th class="px-4 py-2">Tipó de Topografia </th>
                    <th class="px-4 py-2">Tipo de Suelo </th>
                    <th class="px-4 py-2">Tipo de Clima </th>
                    <th class="px-4 py-2">Usuario </th>

                    <th class="px-4 py-2">Nombre del Huerto </th>
                    <th class="px-4 py-2">Path image </th>
                    <th class="px-4 py-2">Localizacion del Huerto </th>
                    <th class="px-4 py-2">point </th>
                    <th class="px-4 py-2">Area </th>
                    <th class="px-4 py-2">Altitud </th>
                    <th class="px-4 py-2">Superficie </th>
                    <th class="px-4 py-2">Estado </th>
                    <th class="px-4 py-2">Año de Creacion </th>
                    <th class="px-4 py-2">Densidad de Plantado </th>
                    <th class="px-4 py-2">Irrigacion </th>
                    <th class="px-4 py-2">Acciones </th>
                </tr>
                </thead>
                <tbody>
                @foreach($orchard as $orchards)
                    <tr>
                        <td class="border px-4 py-2">{{ $orchards->id }}</td>
                        <td class="border px-4 py-2">{{ $orchards->type_avo->type_avocado }}</td>
                        <td class="border px-4 py-2">{{ $orchards->type_topo->type_topography }}</td>
                        <td class="border px-4 py-2">{{ $orchards->type_soi->type_soil  }}</td>
                        <td class="border px-4 py-2">{{ $orchards->climate_typ->climate_type }}</td>
                        <td class="border px-4 py-2">{{ $orchards->us->name }}</td>

                        <td class="border px-4 py-2">{{ $orchards->name_orchard }}</td>
                        <td class="border px-4 py-2">{{ $orchards->path_image }}</td>
                        <td class="border px-4 py-2">{{ $orchards->location_orchard }}</td>
                        <td class="border px-4 py-2">{{ $orchards->point }}</td>
                        <td class="border px-4 py-2">{{ $orchards->area }}</td>
                        <td class="border px-4 py-2">{{ $orchards->altitude }}</td>
                        <td class="border px-4 py-2">{{ $orchards->surface }}</td>
                        <td class="border px-4 py-2">{{ $orchards->state }}</td>
                        <td class="border px-4 py-2">{{ $orchards->creation_year }}</td>
                        <td class="border px-4 py-2">{{ $orchards->planting_density }}</td>
                        <td class="border px-4 py-2">{{ $orchards->irrigation }}</td>

                        <td class="border px-4 py-2">
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
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
