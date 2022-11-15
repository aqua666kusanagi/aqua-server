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



    <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>
</div>
