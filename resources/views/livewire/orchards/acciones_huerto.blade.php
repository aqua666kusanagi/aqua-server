<x-app-layout>
    <ul>
        <li><a id="active1" href="{{route('informacion',$datos->id)}}" target="contenido" onclick="info()">Información</a></li>
        <li><a id="active2" href="{{url('orchard_manager')}}" onclick="feno1()">Fenofases</a></li>
        <li><a id="active3" href="{{url('orchard_production')}}" target="contenido" onclick="produ()">Producción</a></li>
        <li><a id="active4" href="" target="contenido" onclick="reco()">Recomendaciones</a></li>
        <li class="atras"><a href="{{asset("orchard")}}"><i class="fa-solid fa-circle-arrow-left"></i></a></li>
    </ul>

    <div class="container text-center">
        {{--$datos->name_orchard--}}
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
