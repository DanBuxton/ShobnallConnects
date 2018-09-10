// API Key for Google Maps. Get one here: https://developers.google.com/maps/web/
        const key = 'AIzaSyD5U_Hq462mg2SdOqMhy7j3D9v0Az6cPhI'; // Confidencial

// Create an instance of Google.
const mappa = new Mappa('Google', key);

// Options for map
const options = {
    lat: 52.807125,
    lng: -1.655535,
    zoom: 15,
    width: 640,
    height: 500,
    scale: 1,
    format: 'PNG',
    language: 'en',
    maptype: 'default',
};

// Create the static map reference.
let myMap = mappa.staticMap(options);

let img;
let locations;

function preload() {
    // Load the image
    img = loadImage(myMap.imgUrl);
    // Load the data
    locations = loadTable('https://shobnallconnects.epizy.com/locations.csv', 'csv', 'header');
}

//alert(locationsCSV);

function setup() {
    createCanvas(options.width, options.height).parent('canvas');
    noStroke();

    // Display the image
    image(img, 0, 0);

    // Show the locations
    /**/
    for (let i = 0; i < locations.getRowCount(); i++) {
        // Get the lat/lng of each meteorite
        const pos = myMap.latLngToPixel(locations.getString(i, 'reclat'), locations.getString(i, 'reclong'));
        // Get the size of the meteorite and map it.
        let size = locations.getString(i, 'mass (g)');
        size = 50;//map(size, 0, 60000000, 3, 25);
        fill(255, 182, 193);
        ellipse(pos.x, pos.y, size, size);
    }
    /**/
}