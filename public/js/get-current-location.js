
  var  x = document.getElementById("demo");
        function getLocation()
         {
        if (navigator.geolocation)
        {
          navigator.geolocation.getCurrentPosition(showPosition);
        }
        else
        {
          x.innerHTML="Geolocation is not supported by this browser.";}
        }
        function showPosition(position)
        {
          // document.getElementsByClassName("latitudes").setAttribute('value',position.coords.latitude);
          $('.latitudes').val(position.coords.latitude);  
          $('.longlatitudes').val(position.coords.longitude);  
          // document.getElementsByClassName('longlatitudes').setAttribute('value', position.coords.longitude );
          
          // document.getElementsByClassName("latitudes2").setAttribute('value',position.coords.latitude);
          // document.getElementsByClassName('longlatitudes2').setAttribute('value', position.coords.longitude );
        }
        getLocation();