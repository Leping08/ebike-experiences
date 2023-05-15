<template>
    <GoogleMap :api-key="apiKey" style="width: 100%; height: 500px" :center="center" :zoom="zoom">
        <template v-for="(trailHead, index) in trailHeads" :key="index">
            <Marker :options="trailHead">
                <InfoWindow>
                    <div>
                        <h1 class="text-indigo-500 text-2xl mb-2 font-semibold">{{ trailHead.title }}</h1>
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <div class="h-6 w-6" :class="trailHead.bathrooms ? 'text-indigo-500' : 'text-gray-300'">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <title>toilet</title>
                                        <path fill="currentColor"
                                            d="M9,22H17V19.5C19.41,17.87 21,15.12 21,12V4A2,2 0 0,0 19,2H15C13.89,2 13,2.9 13,4V12H3C3,15.09 5,18 9,19.5V22M5.29,14H18.71C18.14,15.91 16.77,17.5 15,18.33V20H11V18.33C9,18 5.86,15.91 5.29,14M15,4H19V12H15V4M16,5V8H18V5H16Z" />
                                    </svg>
                                </div>
                                <div class="font-medium ml-2"
                                    :class="trailHead.bathrooms ? 'text-gray-700 ' : 'text-gray-300 line-through'">
                                    Bathrooms {{ trailHead.bathrooms ? 'Available' : '' }}
                                </div>
                            </div>

                            <div class=" flex items-center mb-2">
                                <div class="h-6 w-6" :class="trailHead.parking ? 'text-indigo-500' : 'text-gray-300'">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <title>car-multiple</title>
                                        <path fill="currentColor"
                                            d="M8,11L9.5,6.5H18.5L20,11M18.5,16A1.5,1.5 0 0,1 17,14.5A1.5,1.5 0 0,1 18.5,13A1.5,1.5 0 0,1 20,14.5A1.5,1.5 0 0,1 18.5,16M9.5,16A1.5,1.5 0 0,1 8,14.5A1.5,1.5 0 0,1 9.5,13A1.5,1.5 0 0,1 11,14.5A1.5,1.5 0 0,1 9.5,16M19.92,6C19.71,5.4 19.14,5 18.5,5H9.5C8.86,5 8.29,5.4 8.08,6L6,12V20A1,1 0 0,0 7,21H8A1,1 0 0,0 9,20V19H19V20A1,1 0 0,0 20,21H21A1,1 0 0,0 22,20V12L19.92,6M14.92,3C14.71,2.4 14.14,2 13.5,2H4.5C3.86,2 3.29,2.4 3.08,3L1,9V17A1,1 0 0,0 2,18H3A1,1 0 0,0 4,17V12.91C3.22,12.63 2.82,11.77 3.1,11C3.32,10.4 3.87,10 4.5,10H4.57L5.27,8H3L4.5,3.5H15.09L14.92,3Z" />
                                    </svg>
                                </div>
                                <div class="font-medium ml-2"
                                    :class="trailHead.parking ? 'text-gray-700 ' : 'text-gray-300 line-through'">
                                    Parking {{ trailHead.parking ? 'Available' : '' }}
                                </div>
                            </div>

                            <div class="flex items-center mb-2">
                                <div class="h-6 w-6" :class="trailHead.water ? 'text-indigo-500' : 'text-gray-300'">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <title>water</title>
                                        <path fill="currentColor"
                                            d="M12,20A6,6 0 0,1 6,14C6,10 12,3.25 12,3.25C12,3.25 18,10 18,14A6,6 0 0,1 12,20Z" />
                                    </svg>
                                </div>
                                <div class="font-medium ml-2"
                                    :class="trailHead.water ? 'text-gray-700 ' : 'text-gray-300 line-through'">
                                    Water {{ trailHead.water ? 'Available' : '' }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <iframe width="560" height="315"
                                :src="`https://www.youtube.com/embed/${trailHead.video_id}?controls=1&playlist=${trailHead.video_id}&loop=1`"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </InfoWindow>
            </Marker>
        </template>
        <Polyline :options="trailOptions" />
    </GoogleMap>
</template>

<script setup>
import { defineProps } from "vue";
import { GoogleMap, Marker, Polyline, InfoWindow } from "vue3-google-map";

// https://vue3-google-map.netlify.app/components/polyline.html
const props = defineProps({
    apiKey: {
        required: true,
        type: String,
        default: ''
    },
    center: {
        required: false,
        type: Array,
        default: []
    },
    trailHeads: {
        required: false,
        type: Array,
        default: []
    },
    path: {
        required: false,
        type: Array,
        default: []
    },
    zoom: {
        required: false,
        type: Number,
        default: 11
    }
});

const trailOptions = {
    path: props.path,
    geodesic: true,
    strokeColor: '#6366F1',
    strokeOpacity: 0.75,
    strokeWeight: 4,
}
</script>
