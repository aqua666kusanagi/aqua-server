<div class="bg-green-100 rounded-lg" style="padding: 20px">
    <header class="w-full text-center text-teal-900 font-extrabold">
        Actividades
    </header>
    <div class="suraya w-full"></div>
    <div class="flex justify-between text-center font-semibold text-indigo-500">
        <div class="w-1/5">
            Actividad
        </div>
        <div class="w-1/5">
            Día
        </div>
        <div class="w-1/5">
            Costo
        </div>
        <div class="w-1/5">
            Visualizar
        </div>
        <div class="w-1/5">
            Estado
        </div>
    </div>
    <div class="suraya w-full"></div>
    <div>
        @foreach($data['calendar'] as $semanas)
            @foreach($semanas['datos'] as $dias)
                @if($dias['mes'] == $mesingles)
                        @foreach($workdays as $work)
                                @if($dias['fecha'] == $work->date_work)
                                    @foreach($activities as $activity)
                                            @if($activity->workday->id == $work->id)
                                                <div class="flex justify-between text-center font-semibold">
                                                    <div class="w-1/5 py-2">{{$activity->typejob->type_job}}</div>
                                                    <div class="w-1/5 py-2">{{date('d',strtotime($activity->workday->date_work))}}</div>
                                                    <div class="w-1/5 py-2">$ {{$activity->cost}}</div>
                                                    <div class="w-1/5 py-2 content-center">
                                                        <button class="bg-green-700 text-white rounded-full w-1/2 hover:bg-green-500">ver</button>
                                                    </div>
                                                    @if($activity->status == "no")
                                                        <div class="w-1/5 py-1 px-4">
                                                            @if($activity->typejob->type == "suplemento")
                                                                <button wire:click="openmodalaplication({{$activity->workday->id}},'{{$activity->typejob->type_job}}',{{$activity->id}})" class="w-full px-2 rounded-lg py-1 border border-indigo-400 bg-pink-50 hover:bg-red-500 hover:text-white" type="button"><i class="fa-solid fa-pen-to-square"></i></button>
                                                            @else
                                                                <button wire:click="do_activiti({{$activity->id}},{{$activity->workday->id}})" class="w-full px-2 rounded-lg py-1 border border-indigo-400 bg-pink-50" type="button"><i class="fa-solid fa-right-to-bracket"></i></button>
                                                            @endif
                                                        </div>
                                                    @elseif($activity->status == "si")
                                                        <div class="w-1/5 py-1 px-4">
                                                            <div class="w-full rounded-lg py-1 {{--border border-indigo-400 bg-indigo-500--}} "><i class="fa-solid fa-check-double"></i></div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="flex justify-center">
                                                    <div class="suraya-blue"></div>
                                                </div>
                                            @endif
                                    @endforeach
                                @endif
                        @endforeach
                @endif
            @endforeach
        @endforeach
    </div>
</div>
