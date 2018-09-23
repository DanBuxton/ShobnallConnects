// API Key for Google Maps. Get one here: https://developers.google.com/maps/web/
const key = 'AIzaSyD5U_Hq462mg2SdOqMhy7j3D9v0Az6cPhI'; // Unique for ShobnallConnects

// Create an instance of Google.
const mappa = new Mappa('Google', key);

// Options for map
const options = {
    lat: 52.807125,
    lng: -1.655535,
    zoom: 14,
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

let marker;

function preload() {
    // Load the image
    img = loadImage('http://shobnallconnects.epizy.com/assets/img/map.png');
//    img = loadImage(myMap.imgUrl); // Not many API calls avaliable
    // Load the data
    locations = loadTable('../../Markers.csv', 'csv', 'header'); // Can't be https
    
    marker = loadImage('http://shobnallconnects.epizy.com/assets/img/marker.png');
}

function setup() {
    createCanvas(options.width, options.height).parent('canvas');
    background(100);
    noStroke();
    // Display the image
    image(img, 0, 0);
    
    // Show the locations
    
//    alert("Locations: " + locations.getRowCount());
    
    /**/
    for (var i = 0; i < locations.getRowCount(); i++) {
        //break;
        // Get the lat/lng of each location
//        alert("Row: " + i + "; lat: " + locations.getString(i, 'lat'));
        const pos = myMap.latLngToPixel(locations.getString(i, 'lat'), locations.getString(i, 'long'));
        const type = locations.getString(i, 'type');
        
        let size = 8;
        
        fill(0, 0, 0);
        ellipse(pos.x, pos.y, size, size); // Need to make this clickable to view information about it
//        image(marker, pos.x, pos.y, size, size);
    }
    /**/
}
