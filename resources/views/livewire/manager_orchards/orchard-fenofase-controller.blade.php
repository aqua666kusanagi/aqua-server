<div class="py-5 px-6">
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
            height: 25px;
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
            height: 25px;
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
            height: 120px;
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
    </style>
    @include('livewire.orchards.acciones_huerto')
    <script>show_nav(), feno1()</script>
    <div class="container px-10 py-10">
        <div class="targetones">
            @foreach($datos_huerto as $regist)
                <div class="espacio">
                    <div class="cards">
                        <h5>{{$regist->orchard->name_orchard}}</h5>
                        <h5>{{$regist->phenophase->phenophase}}</h5>
                    </div>
                </div>
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
    </div>

    @if($isDialogOpen)
        @include('livewire.manager_orchards.create')
    @endif

    <br>

    <div class="container">
        <div class=" ">
            <div class="font-bold w-1/2">IMAGENES</div>
        </div>
    </div>
</div>
