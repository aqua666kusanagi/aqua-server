<x-app-layout>
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
        @livewireStyles
    </head>

    <ul>
        <li><a id="active1" href="{{route('informacion',$datos->id)}}" target="contenido" onclick="info()">Información</a></li>
        <li><a id="active2" href="{{url('orchard_manager')}}" target="contenido" onclick="feno1()">Fenofases</a></li>
        <li><a id="active3" href="" target="contenido" onclick="produ()">Producción</a></li>
        <li><a id="active4" href="" target="contenido" onclick="reco()">Recomendaciones</a></li>
        <li class="atras"><a href="{{asset("orchard")}}"><i class="fa-solid fa-circle-arrow-left"></i></a></li>
    </ul>

    <div class="container text-center">
        {{--$datos->name_orchard--}}
    </div>

    <div class="box border border-indigo-400">
        <iframe src="{{route('informacion',$datos->id)}}"  name="contenido" class="h-screen w-full border border-indigo-400" height="450px">

        </iframe>
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
</x-app-layout>
