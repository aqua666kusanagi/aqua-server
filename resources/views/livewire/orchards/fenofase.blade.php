<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/tailwind.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/diseno.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <style>
        hr {
            height: 5px;
            background-color: black;
            float: left;
            width: 100px;
        }

        .linea {}

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

        .cards {
            width: 100px;
            background-color: #16a34a;
            border-radius: 20px;
            padding: 0.5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class=" p-8 ">
        <div class="p-8">
            @foreach($registros as $regist)
            <div>
                <div class="cards">
                    <h5>{{$regist->phenophase->phenophase}}</h5>
                    <h5>{{$regist->date}}</h5>
                </div>
                <div class="linea">
                    <div class="circulo">
                        <div class="subcirculo"></div>
                    </div>
                    <hr>
                </div>
            </div>
            @endforeach
            <div class="linea">
                <a href="{{route('agregar')}}">
                    <div class="circulof">
                        <div class="subcirculo"></div>
                    </div>
                </a>
            </div>

        </div>
    </div>

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
    <br>

    <div class="">
        <div class=" ">
            <div class="font-bold w-1/2">IMAGENES</div>
        </div>
    </div>
    <div class="padd grid gap-4 grid-cols-3 ">
        @foreach ($photos as $image)
        <div class="px-2">
            <img class="rounded-md h-72 w-1" alt="Image no vista" src="{{url("storage/".$image->path)}}">
        </div>
        @endforeach
    </div>
</body>

</html>
