 <div id="menu_navigation">
        <ul>
            <li><a id="active1" class="hoverr" href="{{route('informacion',$datos_orchard->id)}}">Información</a></li>
            <li><a id="active2" class="hoverr"  href="{{route('calendario',$datos_orchard->id)}}">Calendario</a></li>
            <li><a id="active3" class="hoverr" href="#"  onclick="reco()" >Recomendaciones</a></li>
            <li class="atras"><a href="{{asset("orchard")}}" onclick="regresar()"><i class="fa-solid fa-circle-arrow-left"></i></a></li>
        </ul>
 </div>
