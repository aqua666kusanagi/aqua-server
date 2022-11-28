
<div>
    @include('livewire.orchards.acciones_huerto')

    <script>
        show_nav(), info()
    </script>




    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">


            <div class=" lg:-mx-6 lg:flex lg:items-center">
                <div class="p-2 w-full  rounded-xl h-100 lg:h-96">
                    <div class="text-center text-3xl font-semibold capitalize lg:text-4xl dark:text-white text-green-600">{{$datos_orchard->name_orchard}}</div>
                    <iframe class="p-2 w-full  rounded-xl h-100 lg:h-96" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60292.79868338321!2d-100.1283831!3d19.1820985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd63813218f41f%3A0xb687c3a1fb52897c!2sValle%20de%20Bravo%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1668547463864!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--    <img class="mt-4 object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                -->

                </div>

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 bg-gray-100 rounded-xl items-center grid justify-items-center">

                    <P class=" mt-4 text-2xl font-semibold text-gray-800  dark:text-white ">
                        Informacion del Huerto
                    </P>

                    <div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Tipo de Aguacate</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->type_avo->type_avocado}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Tipo de topografia</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->type_topo->type_topography}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Tipo de Suelo</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->type_soi->type_soil}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Tipo de Clima</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->climate_typ->climate_type}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Ubicación del Huerto</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->location_orchard}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Altitud</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->altitude}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Superficie</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->surface}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Estado</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->state}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Año de Creación</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->creation_year}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Densidad de plantacion</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->planting_density}}</div>
                        </div>
                        <div class="flex justify-between my-3">
                            <div class=" font-bold w-1/2 text-right pr-4">Riego</div>
                            <div class="text-left w-1/2 font-semibold">{{$datos_orchard->irrigation}}</div>
                        </div>

                    </div>

                    <div class="flex items-center mt-6 p-4">
                        <img class=" w-20 h-20 rounded-full" src="{{url("storage/".$datos_orchard->path_image)}}" alt="Image no vista">
                        <div class="mx-4">
                            <div class="w-full flex ">
                                <div class="">
                                    <div class="flex flex-auto px-3">
                                        <div class="text-gray-700 pr-4">Actividades Pendientes: </div>
                                        <div class="font-bold"> 5</div>
                                    </div>
                                    <div class="px-3 text-blue-500"><a href="{{route('calendario',$datos_orchard->id)}}">ir a las actividades</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

    <title>Reverse Geocoding</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script>
      /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: { lat: 40.731, lng: -73.997 },
        });
        const geocoder = new google.maps.Geocoder();
        const infowindow = new google.maps.InfoWindow();

        document.getElementById("submit").addEventListener("click", () => {
          geocodeLatLng(geocoder, map, infowindow);
        });
      }

      function geocodeLatLng(geocoder, map, infowindow) {
        const input = document.getElementById("latlng").value;
        const latlngStr = input.split(",", 2);
        const latlng = {
          lat: parseFloat(latlngStr[0]),
          lng: parseFloat(latlngStr[1]),
        };

        geocoder
          .geocode({ location: latlng })
          .then((response) => {
            if (response.results[0]) {
              map.setZoom(11);

              const marker = new google.maps.Marker({
                position: latlng,
                map: map,
              });

              infowindow.setContent(response.results[0].formatted_address);
              infowindow.open(map, marker);
            } else {
              window.alert("No results found");
            }
          })
          .catch((e) => window.alert("Geocoder failed due to: " + e));
      }

      window.initMap = initMap;
    </script>
    <style>
      /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      /* 
       * Always set the map height explicitly to define the size of the div element
       * that contains the map. 
       */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: "Roboto", "sans-serif";
        line-height: 30px;
        padding-left: 10px;
      }

      #floating-panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }

      #latlng {
        width: 225px;
      }
    </style>

<div>
    MAPA
</div>

    <div id="floating-panel">
      <input id="latlng" type="text" value="40.714224,-73.961452" />
      <input id="submit" type="button" value="Reverse Geocode" />
    </div>
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMb67_ULC5BeRZD2T75ES111lCpbrfhnc&callback=initMap&v=weekly"
      defer
    ></script>