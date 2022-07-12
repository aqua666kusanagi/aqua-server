<x-app-layout>
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
    <ul>
        <li><a id="active1" href="{{route('informacion',$datos->id)}}" target="contenido" onclick="info()">Información</a></li>
        <li><a id="active2" href="{{asset('registro_phenophases')}}" target="contenido" onclick="feno1()">Fenofases_url</a></li>
        <li><a id="active3" href="{{route('fenofase')}}" target="contenido" onclick="feno2()">Fenofases_route</a></li>
        <li><a id="active4" href="{{route('produccion',$datos->id)}}" target="contenido" onclick="produ()">Producción</a></li>
        {{--<li><a id="active4" href="{{route('recomendacion',$datos->id)}}" target="contenido" onclick="reco()">Recomendaciones</a></li>--}}
        <li class="atras"><a href="{{asset("orchard")}}"><i class="fa-solid fa-circle-arrow-left"></i></a></li>
    </ul>

    <div class="container text-center">
        {{--$datos->name_orchard--}}
    </div>

    <div class="box">
        <iframe src="{{route('informacion',$datos->id)}}" frameborder="0" name="contenido" class="w-full border border-indigo-400" height="450px">
            @if(isset($slot))
                {{$slot}}
            @endif
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
        function feno2(){
            document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
            document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
            document.getElementById("active3").style.borderBottom="2px solid #16a34a";
            document.getElementById("active4").style.borderBottom="2px solid #f3f4f6";
        }
        function produ(){
            document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
            document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
            document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
            document.getElementById("active4").style.borderBottom="2px solid #16a34a";
        }
        function reco(){
            document.getElementById("active1").style.borderBottom="2px solid #f3f4f6";
            document.getElementById("active2").style.borderBottom="2px solid #f3f4f6";
            document.getElementById("active3").style.borderBottom="2px solid #f3f4f6";
            document.getElementById("active4").style.borderBottom="2px solid #16a34a";
        }
    </script>
</x-app-layout>
