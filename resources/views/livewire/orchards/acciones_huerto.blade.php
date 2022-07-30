 <div id="menu_navigation">
        <input type="hidden" value="" name="idd">
        <ul>
            <li><a id="active1" class="hoverr" href="{{route('informacion',$datos_orchard->id)}}">Información</a></li>
            <li><a id="active2" class="hoverr" href="{{route('fenofase',$datos_orchard->id)}}">Fenofases</a></li>
            <li><a id="active3" class="hoverr" href="#"  onclick="produ()">Producción</a></li>
            <li><a id="active4" class="hoverr" href="#"  onclick="reco()">Recomendaciones</a></li>
            <li class="atras"><a href="{{asset("orchard")}}" onclick="regresar()"><i class="fa-solid fa-circle-arrow-left"></i></a></li>
        </ul>
 </div>

    <div class="container text-center">
        {{--$datos->name_orchard--}}
    </div>
{{--<x-app-layout> </x-app-layout>--}}
