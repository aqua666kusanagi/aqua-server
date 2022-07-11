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
        width: 20px;
        height: 20px;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        background: #1e40af;
        display: flex;
        justify-content: center;
        align-items: center;
        float: left;
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
    .cards{
        width: 100px;
        background-color: #16a34a;
        border-radius: 20px;
        padding: 0.5px;
        text-align: center;
    }
</style>
<div>
    @foreach($registros as $regist)
    <div>
        <div class="cards">
            <h5>{{$regist->phenophase->phenophase}}</h5>
            <h5>{{$regist->date}}</h5>
        </div>
        <div class="linea">
            <div class="circulo"><div class="subcirculo"></div></div>
            <hr>
        </div>
    </div>
    @endforeach
    <div class="linea">
        <a href="{{route('agregar')}}"><div class="circulof"><div class="subcirculo"></div></div></a>
    </div>

</div>
