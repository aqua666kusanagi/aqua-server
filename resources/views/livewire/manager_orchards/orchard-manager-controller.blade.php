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
</div>

{{--
    <div>
    <script>show_nav()</script>
    <script>feno1()</script>

    {{dd($datos_orchard)}}

    <div class="px-10 py-10">
        <div class="targetones">
            @foreach($datos as $regist)
                <div class="espacio">
                    <div class="cards">
                        <h5>{{$regist->orchard->name_orchard}}</h5>
                        <h5>{{$regist->phenophase->phenophase}}</h5>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="targetones">
            @foreach($datos as $regist)
                <div>
                    <div class="linea">
                        <div class="circulo"><div class="subcirculo"></div></div>
                        <hr>
                    </div>
                </div>
            @endforeach
            <div class="linea">
                <button wire:click="create()" class="circulof">+</button>
                @if($modalCreate)
                    @include('livewire.manager_orchards.create')
                @endif
            </div>
        </div>
        <div class="targetones">
            @foreach($datos as $regist)
                <div class="espacio">
                    <div class="fecha">
                        <h5>{{$regist->date}}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <br>

    <div class="">
        <div class=" ">
            <div class="font-bold w-1/2">IMAGENES</div>
        </div>
    </div>

</div>

--}}
