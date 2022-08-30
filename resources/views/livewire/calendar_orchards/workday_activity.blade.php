<div class="bg-green-100" style="padding: 20px">
    <header class="w-full text-center text-teal-900 font-extrabold">
        Actividades
    </header>
    <div class="suraya w-full"></div>
    <div class="flex justify-between text-center font-semibold">
        <div class="w-36">
            Actividad
        </div>
        <div class="w-36">
            Fecha
        </div>
        <div class="w-36">
            Costo
        </div>
        <div class="w-36">
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
                                                    <div class="w-36 py-2">{{$activity->typejob->type_job}}</div>
                                                    <div class="w-36 py-2">{{$activity->workday->date_work}}</div>
                                                    <div class="w-36 py-2">{{$activity->cost}}</div>
                                                    <div class="w-36 py-2">{{$activity->status}}</div>
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
