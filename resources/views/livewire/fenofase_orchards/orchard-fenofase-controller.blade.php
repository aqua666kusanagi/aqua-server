<div class="w-full">
    <ul class="flex justify-between w-full">
        <li class="w-11/12">
            <div class="text-right text-teal-900 w-full text-center">
                <h1 class="font-bold py-3">Recuerde que las fenofases del huerto tienen que tener un ciclo (inicio y fin).
                    <br>Ciclo Fenologico para el huerto: {{$datos_orchard->name_orchard}}
                </h1>
            </div>
        </li>
        <div class="w-1/12 py-3">
            <li class="">
                <a class="atras rounded-full" href="{{route('calendario',$datos_orchard->id)}}"><i class="fa-solid fa-circle-arrow-left"></i></a>
            </li>
        </div>
    </ul>
    <div class="container px-10">
        <div class="suraya w-full"></div>
        <br>
        <div class="targetones">
            @foreach($fenofases as $regist)
                @if($regist->id == 1)
                    <div class="espacio">
                        <div class="cards">
                            {{--<h5>{{$regist->orchard->name_orchard}}</h5>--}}
                            <h5>{{$regist->phenophase->phenophase}}</h5>
                        </div>
                    </div>
                @endif
                @if($regist->id > 1)
                    <div class="espacio">
                        <div class="cards">
                            <h5>{{$regist->orchard->name_orchard}}</h5>
                            <h5>{{$regist->phenophase->phenophase}}</h5>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="targetones">
            <div class="linea"></div>
            @foreach($fenofases as $regist)
                <div>
                    <div>
                        <div class="circulo"><div class="subcirculo"></div></div>
                        <hr>
                    </div>
                </div>
            @endforeach
            <div>
                <button wire:click="create()" class="circulof">+</button>
            </div>
        </div>
        <div class="targetones">
            @foreach($fenofases as $regist)
                <div class="espacio">
                    <div class="fecha">
                        <h5>{{$regist->date}}</h5>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 20px">
            <div class="font-bold w-full text-center">FENOFASES DISPONIBLES</div>
            <br>
            <div class="grid grid-cols-6 ">
                @foreach($phenophases as $pheno)
                    <div class="text-center">
                        <h3 class="font-bold">{{$pheno->phenophase}}</h3>
                        <div class="fenoo">
                            <img class="w-20 h-20 bg-gray-300 rounded-full flex-shrink-0" src="{{url("storage/".$pheno->image)}}" alt="Image no vista">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @if($isDialogOpen)
        @include('livewire.fenofase_orchards.create')
    @endif
</div>
