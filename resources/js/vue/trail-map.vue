<template>
    <GoogleMap api-key="AIzaSyCoFbUqwbcikUk6VXrvr5tbWAJRK9ceqlU" style="width: 100%; height: 500px"
        :center="mclntoshParking" :zoom="11">
        <Marker :options="{ position: ashton }">
            <InfoWindow>
                <div>
                    <div></div>
                    <h1 id="firstHeading" class="firstHeading">Uluru</h1>
                    <div id="bodyContent">
                        <p class="text-red-500">
                            <b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large sandstone rock formation in the
                            southern
                            part of the Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) south west
                            of the
                            nearest large town, Alice Springs; 450&#160;km (280&#160;mi) by road. Kata Tjuta and Uluru are
                            the two
                            major features of the Uluru - Kata Tjuta National Park. Uluru is sacred to the Pitjantjatjara
                            and
                            Yankunytjatjara, the Aboriginal people of the area. It has many springs, waterholes, rock caves
                            and
                            ancient paintings. Uluru is listed as a World Heritage Site.
                        </p>
                        <p>
                            Attribution: Uluru,
                            <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">
                                https://en.wikipedia.org/w/index.php?title=Uluru</a>
                            (last visited June 22, 2009).
                        </p>
                    </div>
                </div>
            </InfoWindow>
        </Marker>
        <Marker :options="{ position: culverhouse }" />
        <Marker :options="{ position: paynePark }" />
        <Marker :options="{ position: mclntoshParking }" />
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
        const ashton = {
            title: "Ashton Trailhead",
            lat: 27.276596,
            lng: -82.482037
        };

        const culverhouse = {
            title: "Culverhouse Park",
            lat: 27.249038,
            lng: -82.475492
        }

        const paynePark = {
            title: "Payne Park",
            lat: 27.333336,
            lng: -82.525669
        }

        const mclntoshParking = {
            title: "Payne Park",
            lat: 27.23801281032138,
            lng: -82.47583695874043
        }

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

        return { trailOptions, ashton, culverhouse, paynePark, mclntoshParking };
    },
});
</script>
