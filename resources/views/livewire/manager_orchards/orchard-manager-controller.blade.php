<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: #1a202c;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #0f766e;
            color: white;
            border-radius: 15px;
            border-bottom: 2px solid #16a34a;
        }
        .atras{
            float: right;
        }
    </style>
    <style>
        hr {
            margin-top: 8px;
            height: 5px;
            background-color: black;
            float: left;
            width: 100px;
        }

        .linea{

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
            width: 25px;
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
            /*border: 2px solid #0d9488;*/
        }
        .cards{
            width: 100px;
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
        }
    </style>
</head>

<ul>
    <li><a id="active1" href="{{route('informacion',1)}}" target="contenido" onclick="info()">Información</a></li>
    <li><a id="active2" href="{{route('fenofase')}}" target="contenido" onclick="feno1()">Fenofases</a></li>
    <li><a id="active3" href="" target="contenido" onclick="produ()">Producción</a></li>
    <li><a id="active4" href="" target="contenido" onclick="reco()">Recomendaciones</a></li>
    <li class="atras"><a href="{{asset("orchard")}}"><i class="fa-solid fa-circle-arrow-left"></i></a></li>
</ul>

<div class="container text-center">
    {{--$datos->name_orchard--}}
</div>

<div class="h-screen w-full border border-indigo-400 py-10 px-10">
    <div>
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
                <button wire:click="{{$modal=false}}" onclick="btn()" class="circulof">+</button>
                @if($modal)
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
<script>
    function info(){
        document.getElementById("active1").style.borderBottom="2px solid #16a34a";
        document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    }
    function feno1(){
        document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active2").style.borderBottom="2px solid #16a34a";
        document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    }

    function produ(){
        document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active3").style.borderBottom="2px solid #16a34a";
        document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
    }
    function reco(){
        document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
        document.getElementById("active4").style.borderBottom="2px solid #16a34a";
    }
</script>
