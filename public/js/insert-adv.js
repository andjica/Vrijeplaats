// $('#images').on('change', function(){

//      var files = $("#images")[0].files;
//      var allowed_extensions = new Array("jpg","png","jpeg");

//         for (var i = 0; i < files; i++)
//         {
        
//             var file_extension = files[i].split('.').pop().toLowerCase(); 
//             alert(file_extension);
//         }
// });

$("#title").on('keyup',function(){

    let title = $('#title').val();

    if(title == "")
    {
        document.getElementById('title-er').innerHTML = "Titel is verplicht veld";
    }
    else
    {
        document.getElementById('title-er').innerHTML = "";
    }
});

$("#autocomplete-city").on('keyup',function(){

    let city = $('#autocomplete-city').val();
    
    if(city == "")
    {
        document.getElementById('city-er').innerHTML = "Plaats is verplicht veld";
    }
    else
    {
        document.getElementById('city-er').innerHTML = "";
    }
});

$("#phone").on('keyup',function(){

    let phone = $('#phone').val();
    var filter = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    
    
    if(phone == "")
    {
        document.getElementById('phone-er').innerHTML = "Phone is verplicht veld";
    }
    else if(!filter.test(phone)) {
        //alert('Please provide a valid email address');
        $("#phone-er").text(phone+" is geen geldig phone");
        phone.focus;
        //return false;
    }
    else
    {
        document.getElementById('phone-er').innerHTML = "";
    }
});
 
$("#autocomplete").on('keyup',function(){

    let address = $('#autocomplete').val();

    if(address == "")
    {
        document.getElementById('address-er').innerHTML = "Adres is verplicht veld";
    }
    else
    {
        document.getElementById('address-er').innerHTML = "";
    }
});
 
$("#tickets").on('keyup',function(){

    let tickets = $('#tickets').val();
    var filter = /^[0-9]+$/;

    if(tickets == "")
    {
        document.getElementById('tickets-er').innerHTML = "Tickets is verplicht veld";
    }
    else if(!filter.test(tickets)) {
        //alert('Please provide a valid email address');
        $("#tickets-er").text("Ticket moet een nummer zijn");
        tickets.focus;
        //return false;
    }
    else
    {
        document.getElementById('tickets-er').innerHTML = "";
    }
});
$("#validuntil").on('keyup',function(){

    let validuntil = $('#validuntil').val();
    var date_regex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/;
    if (!date_regex.test(validuntil)) {
        // alert("nije dobro");
    }
    if(validuntil == "")
    {
        document.getElementById('validuntil-er').innerHTML = "Date is verplicht veld";
    }
    else
    {
        document.getElementById('validuntil-er').innerHTML = "";
    }
});


$("#currentprice").on('keyup',function(){

    let currentprice = $('#currentprice').val();
    var filter = /^[0-9]+$/;

    if(currentprice == "")
    {
        document.getElementById('currentprice-er').innerHTML = "Tickets is verplicht veld";
    }
    else if(!filter.test(currentprice)) {
        //alert('Please provide a valid email address');
        $("#currentprice-er").text("Price moet een nummer zijn");
        currentprice.focus;
        //return false;
    }
    else
    {
        document.getElementById('currentprice-er').innerHTML = "";
    }
});

$("#firstprice").on('keyup',function(){

    let firstprice = $('#firstprice').val();
    var filter = /^[0-9]+$/;

    if(firstprice == "")
    {
        document.getElementById('firstprice-er').innerHTML = "Tickets is verplicht veld";
    }
    else if(!filter.test(firstprice)) {
        //alert('Please provide a valid email address');
        $("#firstprice-er").text("Price moet een nummer zijn");
        firstprice.focus;
        //return false;
    }
    else
    {
        document.getElementById('firstprice-er').innerHTML = "";
    }
});

$("#website").keyup(function(){
   
    var website = $("#website").val();
    var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
    if (!filter.test(website)) {
      //alert('Please provide a valid email address');
      $("#website-er").text(website+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
      website.focus;
      //return false;
    } else {
        $("#website-er").text("");
    }
   });
   $("#whatsapp").on('keyup',function(){

    let whatsapp = $('#whatsapp').val();
    var filter = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    
  
    if(!filter.test(whatsapp)) {
        //alert('Please provide a valid email address');
        $("#whatsapp-er").text(whatsapp+" is geen geldig phone");
        whatsapp.focus;
        //return false;
    }
    else
    {
        document.getElementById('whatsapp-er').innerHTML = "";
    }
});
   $("#instagram").on('keyup', function(){
   
    var instagram = $("#instagram").val();
    var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
    if (!filter.test(instagram)) {
      //alert('Please provide a valid email address');
      $("#instagram-er").text(instagram+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
      instagram.focus;
      //return false;
    } else {
        $("#instagram-er").text("");
    }
   });
 
   $("#linkedin").on('keyup', function(){
    
     var linkedin = $("#linkedin").val();
     var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
     if (!filter.test(linkedin)) {
       //alert('Please provide a valid email address');
       $("#linkedin-er").text(linkedin+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
       linkedin.focus;
       //return false;
     } else {
         $("#linkedin-er").text("");
     }
    });
    $("#facebook").on('keyup', function(){
    
     var facebook = $("#facebook").val();
     var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
     if (!filter.test(facebook)) {
       //alert('Please provide a valid email address');
       $("#facebook-er").text(facebook+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
       facebook.focus;
       //return false;
     } else {
         $("#facebook-er").text("");
     }
    });
    $("#youtube").on('keyup', function(){
    
        var youtube = $("#youtube").val();
        var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
        if (!filter.test(youtube)) {
          //alert('Please provide a valid email address');
          $("#youtube-er").text(youtube+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
          youtube.focus;
          //return false;
        } else {
            $("#youtube-er").text("");
        }
       });
 
$('#insert-advertising').on('submit', function(e){
  

   let errors = [];

   let title = $('#title').val();
   let shortdesc = $('#shortdesc').val();
   let city = $('#autocomplete-city').val();
   let phone = $('#phone').val();
   let address = $('#autocomplete').val();
   let tickets = $('#tickets').val();
   let description = $('#summernote').val();
   let currentprice = $('#currentprice').val();
   let firstprice = $('#firstprice').val();

   if(title == "")
   {
       errors.push = "Mistake";
       document.getElementById('title-er').innerHTML = "Titel is verplicht veld";
       e.preventDefault();
   }
   if(shortdesc == "")
   {
       errors.push = "Mistake";
       document.getElementById('shortdesc-er').innerHTML = "Hoofdbeschrijving is verplicht veld";
       e.preventDefault();
   }
   if(phone == "")
   {
       errors.push = "Mistake";
       document.getElementById('phone-er').innerHTML = "Phone is verplicht veld";
       e.preventDefault();
   }
   if(city == "")
   {
       errors.push = "Mistake";
       document.getElementById('city-er').innerHTML = "City is verplicht veld";
       e.preventDefault();
   }
   if(address == "")
   {
       errors.push = "Mistake";
       document.getElementById('address-er').innerHTML = "Adres is verplicht veld";
       e.preventDefault();
   }
   if(tickets == "")
   {
       errors.push = "Mistake";
       document.getElementById('tickets-er').innerHTML = "Ticket is verplicht veld";
       e.preventDefault();
   }
   if(description == "")
   {
       errors.push = "Mistake";
       document.getElementById('description-er').innerHTML = "Beschrijving is verplicht veld";
       e.preventDefault();
   }
   if(currentprice == "")
   {
       errors.push = "Mistake";
       document.getElementById('currentprice-er').innerHTML = "Current price is verplicht veld";
       e.preventDefault();
   }
   if(firstprice == "")
   {
       errors.push = "Mistake";
       document.getElementById('firstprice-er').innerHTML = "First price is verplicht veld";
       e.preventDefault();
   }

   if(errors.count == 0)
   {
       return true;
   }
   
   
});