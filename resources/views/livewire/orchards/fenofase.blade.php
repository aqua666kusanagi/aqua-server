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
        height: 20px;
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
        background-color: #16a34a;
        border-radius: 20px;
        padding: 0.5px;
        text-align: center;
        float: left;
    }
    .salto{
        display: block;
    }
</style>
<div>
    <div class="targetones">
        @foreach($registros as $regist)
            <div class="espacio">
                <div class="cards">
                    <h5>{{$regist->orchard->name_orchard}}</h5>
                    <h5>{{$regist->phenophase->phenophase}}</h5>
                    <h5>{{$regist->date}}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <div class="targetones">
        @foreach($registros as $regist)
            <div>
                <div class="linea">
                    <div class="circulo"><div class="subcirculo"></div></div>
                    <hr>
                </div>
            </div>
        @endforeach
        <div class="linea">
            <a href="{{}}"><div class="circulof">+</div></a>
        </div>
    </div>
</div>
