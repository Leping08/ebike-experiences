<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Google Maps API Key
    |--------------------------------------------------------------------------
    |
    | This is the api key used in the Google Maps JavaScript API.
    |
    */

    'api_key' => env('VITE_GOOGLE_MAPS_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Google Maps Map ID
    |--------------------------------------------------------------------------
    |
    | Advanced markers require a Map ID. Create one under Map Management in
    | the Google Cloud console.
    |
    */

    'map_id' => env('GOOGLE_MAPS_MAP_ID'),

];
