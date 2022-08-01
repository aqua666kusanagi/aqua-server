<div class="w-full">
    <style>
        hr {
            height: 5px;
            background-color: black;
            float: left;
            width: 100px;
        }

        .linea{
            width: 40px;
        }
        .circulo {
            width: 20px;
            height: 20px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: #16a34a;
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
        }
        .circulof {
            width: 30px;
            height: 20px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 25px;
            background: #1e40af;
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
            color: white;
        }
        .circulof:hover{
            width: 25px;
            height: 20px;
            background-color: #0d9488;
        }
        .subcirculo {
            width: 10px;
            height: 10px;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background-color: black;
            display: block;
        }
        .targetones{
            display: flex;
        }
        .espacio{
            width: 120px;
            margin-bottom: 10px;
            text-align: center;
            /*border: 2px solid #0d9488;*/
        }
        .cards{
            width: 100px;
            height: 100px;
            background-color: #d1fae5;
            border: 1px solid #9ca3af;
            border-radius: 20px;
            padding: 0.5px;
            text-align: center;
            float: left;
        }
        .fecha{
            width: 100px;
            padding: 0.5px;
            float: left;
            background-color: #9ca3af;
            border-radius: 15px;
        }
        .fenoo{
            margin-left: 25%;
        }
    </style>
    @include('livewire.orchards.acciones_huerto')
    <script>show_nav(), feno()</script>
    <div class="container px-10 py-4 border">
        <div class="targetones">
            @foreach($datos_huerto as $regist)
                @if($regist->id == 1)
                    <div class="espacio">
                        <div class="cards">
                            <h5>{{$regist->orchard->name_orchard}}</h5>
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
            @foreach($datos_huerto as $regist)
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
            @foreach($datos_huerto as $regist)
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
        @include('livewire.manager_orchards.create')
    @endif
</div>
