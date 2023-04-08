<template>
    <GoogleMap api-key="AIzaSyCoFbUqwbcikUk6VXrvr5tbWAJRK9ceqlU" style="width: 100%; height: 500px"
        :center="trailHeads[1].position" :zoom="11">
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
                            <iframe width="560" height="315" :src="`https://www.youtube.com/embed/${trailHead.videoId}`"
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

<script>
import { defineComponent } from "vue";
import { GoogleMap, Marker, Polyline, InfoWindow } from "vue3-google-map";

// https://vue3-google-map.netlify.app/components/polyline.html
export default defineComponent({
    components: { GoogleMap, Marker, Polyline, InfoWindow },
    setup() {
        const trailHeads = [
            {
                title: "Ashton Trailhead",
                videoId: "fh_F9yEEae8",
                parking: true,
                water: true,
                bathrooms: false,
                position: {
                    lat: 27.276596,
                    lng: -82.482037,
                },
            },
            {
                title: "Culverhouse Park",
                videoId: "AS0TZPD80fQ",
                parking: true,
                water: false,
                bathrooms: false,
                position: {
                    lat: 27.249038,
                    lng: -82.475492,
                },
            },
            {
                title: "Payne Park",
                videoId: "O9CH-13SlTc",
                parking: true,
                water: true,
                bathrooms: false,
                position: {
                    lat: 27.333336,
                    lng: -82.525669,
                },
            },
            {
                title: "McIntosh Trailhead",
                videoId: "KC8oYgzlP4Y",
                parking: false,
                water: true,
                bathrooms: true,
                position: {
                    lat: 27.23801281032138,
                    lng: -82.47583695874043,
                },
            },
        ];

        const trailCords = [
            { lat: 27.101446, lng: -82.440600 },
            { lat: 27.108499, lng: -82.442102 },
            { lat: 27.108844, lng: -82.442280 },
            { lat: 27.115868, lng: -82.443885 },
            { lat: 27.119308, lng: -82.444694 },
            { lat: 27.122920, lng: -82.445550 },
            { lat: 27.126883, lng: -82.446486 },
            { lat: 27.136056, lng: -82.448674 },
            { lat: 27.138387, lng: -82.449231 },
            { lat: 27.149419, lng: -82.451862 },
            { lat: 27.168009, lng: -82.456252 },
            { lat: 27.176485, lng: -82.458264 },
            { lat: 27.196202, lng: -82.462974 },
            { lat: 27.225339, lng: -82.469866 },
            { lat: 27.237929, lng: -82.472868 },
            { lat: 27.244429, lng: -82.474494 },
            { lat: 27.249038, lng: -82.475492 },
            { lat: 27.259192, lng: -82.477905 },
            { lat: 27.269217, lng: -82.480282 },
            { lat: 27.276596, lng: -82.482037 },
            { lat: 27.280306, lng: -82.482914 },
            { lat: 27.283968, lng: -82.483778 },
            { lat: 27.291487, lng: -82.485580 },
            { lat: 27.298756, lng: -82.487307 },
            { lat: 27.308272, lng: -82.489552 },
            { lat: 27.322937, lng: -82.493041 }, // end of second curve
            { lat: 27.327992, lng: -82.494254 },
            { lat: 27.328678, lng: -82.494517 },
            { lat: 27.329231, lng: -82.494941 },
            { lat: 27.329545, lng: -82.495348 },
            { lat: 27.329836, lng: -82.495853 },
            { lat: 27.330041, lng: -82.496518 },
            { lat: 27.330097, lng: -82.497548 }, // start of second curve
            { lat: 27.330135, lng: -82.507816 },
            { lat: 27.330126, lng: -82.514052 },
            { lat: 27.330128, lng: -82.522282 }, // end of the first curve
            { lat: 27.330348, lng: -82.523491 },
            { lat: 27.330849, lng: -82.524392 },
            { lat: 27.331421, lng: -82.525095 },
            { lat: 27.331897, lng: -82.525417 },
            { lat: 27.332550, lng: -82.525632 },
            { lat: 27.333336, lng: -82.525669 }, // start of first curve
            { lat: 27.337437, lng: -82.525629 }
        ];

        const trailOptions = {
            path: trailCords,
            geodesic: true,
            strokeColor: '#6366F1',
            strokeOpacity: 0.75,
            strokeWeight: 4,
        }

        return { trailOptions, trailHeads };
    },
});
</script>
