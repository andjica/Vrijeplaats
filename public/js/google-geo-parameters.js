
    $(document).ready(function () {
        $("#latitudeArea").addClass("d-none");
        $("#longtitudeArea").addClass("d-none");
    });
google.maps.event.addDomListener(window, 'load', initialize);
  
function initialize() {
    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        $('#latitude').val(place.geometry['location'].lat());
        
        $('#longitude').val(place.geometry['location'].lng());

       

        $("#latitudeArea").removeClass("d-none");
        $("#longtitudeArea").removeClass("d-none");

        let vallatitude = $('#latitude').val();
        let longitude = $('#longitude').val();
        
    });
    var input2 = document.getElementById('autocomplete-city');
    var autocomplete2 = new google.maps.places.Autocomplete(input2);

    autocomplete2.addListener('place_changed', function () {
        var place = autocomplete2.getPlace();
        $('#citylatitude').val(place.geometry['location'].lat());
        
        $('#citylongitude').val(place.geometry['location'].lng());

       

        $("#citylatitudeArea").removeClass("d-none");
        $("#citylongtitudeArea").removeClass("d-none");

        let cityvallatitude = $('#citylatitude').val();
        let citylongitude = $('#citylongitude').val();
        
    });


}