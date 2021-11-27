<!DOCTYPE html>
<html>
  <head>
    <title>Complex Marker Icons</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style>
        #map {
  height: 50%;
}

/* Optional: Makes the sample page fill the window. */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

    </style>
  </head>
  <body>
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdAhrknlhXmlBUhZ5NzvWr1REqAwpzXr0&callback=initMap&v=weekly"
      async
    ></script>
  </body>
</html>


    <script>
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: { lat: 34.84555, lng: -111.8035 },
  });
  // Set LatLng and title text for the markers. The first marker (Boynton Pass)
  // receives the initial focus when tab is pressed. Use arrow keys to
  // move between markers; press tab again to cycle through the map controls.
  const tourStops = [
    [{ lat: 34.8791806, lng: -111.8265049 }, "Andjica - Titile"],
    [{ lat: 34.8559195, lng: -111.7988186 }, "Airport Mesa"],
    [{ lat: 34.832149, lng: -111.7695277 }, "Chapel of the Holy Cross"],
    [{ lat: 34.823736, lng: -111.8001857 }, "Red Rock Crossing"],
    [{ lat: 34.800326, lng: -111.7665047 }, "Bell Rock"],
  ];
 console.log(tourStops);
 
 
  const image = {
    url: "http://localhost/vrijeplaats/public/images/map.png",
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(30, 30),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 3),
  };
  
  // Create an info window to share between markers.
  const infoWindow = new google.maps.InfoWindow();

  // Create the markers.
  tourStops.forEach(([position, title], i) => {
    const marker = new google.maps.Marker({
      position,
      map,
      icon: image,
      title: `${i + 1}. ${title}`,
      label: `${i + 1}`,
      optimized: false,
    });

    // Add a click listener for each marker, and set up the info window.
    marker.addListener("click", () => {
      infoWindow.close();
      infoWindow.setContent(marker.getTitle());
      infoWindow.open(marker.getMap(), marker);
    });
  });
}

        </script>
    