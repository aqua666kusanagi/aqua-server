 <div id="menu_navigation">
        <ul>
            <li><a id="active1" class="hoverr" href="{{route('informacion',$datos_orchard->id)}}" onclick="info()">Información</a></li>
            <li><a id="active2" class="hoverr" href="{{route('fenofase',$datos_orchard->id)}}" onclick="feno()">Fenofases</a></li>
            <li><a id="active3" class="hoverr" href="{{route('produccion',$datos_orchard->id)}}" onclick="produ()">Producción</a></li>
            <li><a id="active4" class="hoverr" href="{{route('dias_trabajo',$datos_orchard->id)}}" onclick="workd()">Dias_a_Trabajar</a></li>
            <li><a id="active5" class="hoverr"  href="{{route('calendario',$datos_orchard->id)}}" onclick="activi()">Actividades</a></li>
            <li><a id="active6" class="hoverr" href="#"  onclick="foto()">Fotografias</a></li>
            <li><a id="active7" class="hoverr" href="#"  onclick="reco()">Recomendaciones</a></li>
            <li class="atras"><a href="{{asset("orchard")}}" onclick="regresar()"><i class="fa-solid fa-circle-arrow-left"></i></a></li>
        </ul>
 </div>
