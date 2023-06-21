// Initialize and add the map
let map;

async function initMap() {
    // The location of Uluru
    const position = { lat: 18.107474, lng: -65.934853 };
    // Request needed libraries.
    //@ts-ignore
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

    // The map, centered at Uluru
    map = new Map(document.getElementById("map"), {
        zoom: 4,
        center: position,
        mapId: "DEMO_MAP_ID",
    });

    let stations = (await fetch("/data.json").then((res) => res.json())).stations;
    console.log(stations);
    console.log(stations[0].latitude, stations[0].longitude);

    for (let station in stations) {
        let marker = new AdvancedMarkerElement({
            map: map,
            position: {
                lat: stations[station].latitude,
                lng: stations[station].longitude,
            },
            title: stations[station].name,
        });
        marker.addListener("click", () => {
            window.location.href = "/data/" + stations[station].name;
        });
    }
}

initMap();
