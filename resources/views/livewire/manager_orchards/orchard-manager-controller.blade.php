
<!--<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script>
  /**
   * @license
   * Copyright 2019 Google LLC. All Rights Reserved.
   * SPDX-License-Identifier: Apache-2.0
   */
  function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 8,
      center: {
        lat: 19.169934938511595,
        lng: -100.12769729634527,
      },
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
      .geocode({
        location: latlng
      })
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

  //AUTOEJECUTAR
  //SINTAXIS
  //(function foo(){} ());

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
    margin: 10px 3px 10px 5px;
    /* 10px arriba, 3px derecha, 30px abajo, 5px izquierda */
    ;
  }

  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  #latlng {
    width: 225px;
  }
</style>

-->

<div>
  @include('livewire.orchards.acciones_huerto')

  <script>
    show_nav(), info()
  </script>




  <section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">


      <div class=" lg:-mx-6 lg:flex lg:items-center content-start">
        <div class="p-2 w-full  rounded-xl h-100 lg:h-96">
          <div class="text-center text-3xl font-semibold capitalize lg:text-4xl dark:text-white text-green-600">{{$datos_orchard->name_orchard}}</div>
          <div>
            <input id="latlng" type="text" value="40.714224,{{$datos_orchard->altitude}}" />
            <input id="submit" type="button" value="Reverse Geocode" />
            <div>
            </div>

          </div>
          <div id="map"></div>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMb67_ULC5BeRZD2T75ES111lCpbrfhnc&callback=initMap&v=weekly" defer></script>

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


<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script>
  /**
   * @license
   * Copyright 2019 Google LLC. All Rights Reserved.
   * SPDX-License-Identifier: Apache-2.0
   */
  // This example creates a simple polygon representing the Bermuda Triangle.
  function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 5,
      center: {
        lat: 24.886,
        lng: -70.268
      },
      mapTypeId: "terrain",
    });
    // Define the LatLng coordinates for the polygon's path.
    const triangleCoords = [{
        lat: 25.774,
        lng: -80.19
      },
      {
        lat: 18.466,
        lng: -66.118
      },
      {
        lat: 32.321,
        lng: -64.757
      },
      {
        lat: 25.774,
        lng: -80.19
      },
    ];
    // Construct the polygon.
    const bermudaTriangle = new google.maps.Polygon({
      paths: triangleCoords,
      strokeColor: "#FF0000",
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: "#FF0000",
      fillOpacity: 0.35,
    });

    bermudaTriangle.setMap(map);
  }

  window.initMap = initMap;
</script>
<style>
  /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
  /** 
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
</style>

<div id="map"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMb67_ULC5BeRZD2T75ES111lCpbrfhnc&callback=initMap&v=weekly" defer></script>