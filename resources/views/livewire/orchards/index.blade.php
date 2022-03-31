<div class="h-screen pb-14 bg-right bg-cover padd" style="background-image:url({{asset('images/fondo2.jpg')}});">
    <div class="flex items-center justify-between  dark:border-primary-darker">
        <h1 class="text-2xl font-semibold">HUERTOS HAS</h1>
        <button wire:click="create()"
                class="bg-primary text-white font-bold py-2 px-4 rounded my-3 "><i class="fa-solid fa-plus"></i></button>
    </div>

    <div class="container item_container">
        <!--<div class="subitem">1</div>
        <div class="subitem">2</div>
        <div class="subitem">3</div>
        <div class="subitem">4</div>
        <div class="subitem">5</div>
        <div class="subitem">6</div>
        <div class="subitem">7</div>
        <div class="subitem">8</div>
        <div class="subitem">9</div>
        <div class="subitem">0</div>-->
        {{--NOS QUEDAMOS EN LA PARTE PARA MOSTRAR LOS huertos--}}

        @foreach($orchard as $orchards)
            <div class="subitem">
                <div class="border mb-4">{{ $orchards->name_orchard }}</div>
                <div class="border mb-4">{{ $orchards->location_orchard }}</div>
                <div class="border mb-4">{{ $orchards->point }}</div>
                <div class="border mb-4">{{ $orchards->area }}</div>
                <div class="border mb-4">{{ $orchards->altitude }}</div>
                <div class="border mb-4">{{ $orchards->surface }}</div>
                <div class="border mb-4">{{ $orchards->state }}</div>
                <div class="border mb-4">{{ $orchards->creation_year }}</div>
                <div class="border mb-4">{{ $orchards->planting_density }}</div>
                <div class="border mb-4">{{ $orchards->irrigation }}</div>

                <div class="border mb-4">
                    <div class="flex justify-between">
                        <div>
                            <button wire:click="edit({{ $orchards->id }})"
                                    class="bg-green-700 text-white font-bold py-2 px-4"><i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                        <div>
                            <button wire:click="delete({{ $orchards->id }})"
                                    class="bg-red-700 text-white font-bold py-2 px-4"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

