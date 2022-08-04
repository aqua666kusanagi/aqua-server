 <div id="menu_navigation">
        <input type="hidden" value="" name="idd">
        <ul>
            <li><a id="active1" class="hoverr" href="{{route('informacion',$datos_orchard->id)}}">Información</a></li>
            <li><a id="active2" class="hoverr" href="{{route('fenofase',$datos_orchard->id)}}">Fenofases</a></li>
            <li><a id="active3" class="hoverr" href="{{ route('produccion',$datos_orchard->id)}}">Producción</a></li>
            <li><a id="active4" class="hoverr" href="#"  onclick="workd()">Dias_a_Trabajar</a></li>
            <li><a id="active5" class="hoverr" href="#"  onclick="activi()">Actividades</a></li>
            <li><a id="active6" class="hoverr" href="#"  onclick="foto()">Fotografias</a></li>
            <li><a id="active7" class="hoverr" href="#"  onclick="reco()">Recomendaciones</a></li>
            <li class="atras"><a href="{{asset("orchard")}}" onclick="regresar()"><i class="fa-solid fa-circle-arrow-left"></i></a></li>
        </ul>
 </div>
