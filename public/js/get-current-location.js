
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
    document.getElementById("latitudes").setAttribute('value',position.coords.latitude);
   
    document.getElementById('longlatitudes').setAttribute('value', position.coords.longitude );
    
  }
  getLocation();