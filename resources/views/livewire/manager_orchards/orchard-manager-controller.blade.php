<div>
    <script>vermas()</script>
    <script>feno1()</script>
    <div class="px-10 py-10">
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
                <button wire:click="create()" class="circulof">+</button>
                @if($modalCreate)
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
