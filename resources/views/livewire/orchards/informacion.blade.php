<link rel="stylesheet" href="{{asset('/css/app.css')}}">
<link rel="stylesheet" href="{{asset('/css/tailwind.css')}}" />
<div class="flex justify-between w-full px-4">
    <div class="px-4 py-4 my-4 w-1/2">
        <div class="flex justify-between my-3">
            <div class=" font-bold w-1/2">Nombre del huerto</div>
            <div class="text-center w-1/2">{{$datos->name_orchard}}</div>
        </div>
        <div class="flex justify-between my-3">
            <div class=" font-bold w-1/2">Año de creación</div>
            <div class="text-center w-1/2">{{$datos->creation_year}}</div>
        </div>
        <div class="flex justify-between my-3">
            <div class=" font-bold w-1/2">Tipo de Aguacate</div>
            <div class="text-center w-1/2">{{$datos->type_avo->type_avocado}}</div>
        </div>
    </div>
    <div class="px-4 py-4 mx-auto my-4 flex justify-center">
        <img class="bg-gray-300 rounded-md h-72 w-1/2" src="{{url("storage/".$datos->path_image)}}" alt="Image no vista" >
    </div>
</div>
