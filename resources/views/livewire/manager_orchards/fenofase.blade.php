<style>
    hr {
        height: 5px;
        background-color: black;
        float: left;
        width: 100px;
    }

    .linea{

    }
    .circulo {
        width: 20px;
        height: 20px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        background: #16a34a;
        display: flex;
        justify-content: center;
        align-items: center;
        float: left;
    }
    .circulof {
        width: 30px;
        height: 25px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 25px;
        background: #1e40af;
        display: flex;
        justify-content: center;
        align-items: center;
        float: left;
        color: white;
    }
    .circulof:hover{
        width: 25px;
        height: 25px;
        background-color: #0d9488;
    }
    .subcirculo {
        width: 10px;
        height: 10px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        background-color: black;
        display: block;
    }
    .targetones{
        display: flex;
    }
    .espacio{
        width: 120px;
        /*border: 2px solid #0d9488;*/
    }
    .cards{
        width: 100px;
        background-color: #d1fae5;
        border: 1px solid #9ca3af;
        border-radius: 20px;
        padding: 0.5px;
        text-align: center;
        float: left;
    }
    .fecha{
        width: 100px;
        padding: 0.5px;
        float: left;
    }
    .salto{
        display: block;
    }
</style>

<div>
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
            <button wire:click="{{$modal=false}}" onclick="btn()" class="circulof">+</button>
            @if($modal)
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
{{--<div class="grid grid-cols-4 gap-4 ">
    @foreach ($photos as $image)
        <div class="px-4">
            <img class="rounded-md h-72 w-1" alt="Image no vista" src="{{url("storage/".$image->path)}}">
        </div>
    @endforeach
</div>--}}
<script>
    function btn(){

    }
</script>
