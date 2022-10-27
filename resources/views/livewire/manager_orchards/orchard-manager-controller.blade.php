<div>
    @include('livewire.orchards.acciones_huerto')

    <script>show_nav(), info()</script>

    <div class="flex justify-between w-full px-4">
        <div class="px-4 py-4 my-4 w-1/2">
            <div class="flex justify-between my-3">
                <div class=" font-bold w-1/2">Nombre del Huerto</div>
                <div class="text-center w-1/2 font-semibold text-green-600">{{$datos_orchard->name_orchard}}</div>
            </div>
            <div class="flex justify-between my-3">
                <div class=" font-bold w-1/2">Año de Creación</div>
                <div class="text-center w-1/2 font-semibold">{{$datos_orchard->creation_year}}</div>
            </div>
            <div class="flex justify-between my-3">
                <div class=" font-bold w-1/2">Tipo de Aguacate</div>
                <div class="text-center w-1/2 font-semibold">{{$datos_orchard->type_avo->type_avocado}}</div>
            </div>
            <div class="flex justify-between my-3">
                <div class=" font-bold w-1/2">Ubicación del Huerto</div>
                <div class="text-center w-1/2 font-semibold">{{$datos_orchard->location_orchard}}</div>
            </div>
            <div class="flex justify-between my-3">
                <div class=" font-bold w-1/2">Tipo de Suelo</div>
                <div class="text-center w-1/2 font-semibold">{{$datos_orchard->type_soi->type_soil}}</div>
            </div>
            <div class="flex justify-between my-3">
                <div class=" font-bold w-1/2">Tipo de Clima</div>
                <div class="text-center w-1/2 font-semibold">{{$datos_orchard->climate_typ->climate_type}}</div>
            </div>
        </div>
        <div class="px-4 py-4 mx-auto my-4 flex justify-center">
            <img class="bg-gray-300 rounded-md h-72 w-full" src="{{url("storage/".$datos_orchard->path_image)}}" alt="Image no vista" >
        </div>
    </div>
    <div class="w-full flex justify-between">
        <div class="w-1/2"></div>
        <div class="w-1/2">
            <div class="flex flex-auto px-3">
                <div class="font-semibold">Actividades Pendientes:</div>
                <div class="w-4"></div>
                <div class="font-bold">5</div>
            </div>
            <div class="px-3 text-blue-500"><a href="{{route('calendario',$datos_orchard->id)}}">ir a las actividades</a></div>
        </div>
    </div>
</div>
