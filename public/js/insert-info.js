$('#userimage').change(function(e){
  var fileName = e.target.files[0].name;
  // alert(fileName + ' is the selected file .');

  var allowed_extensions = new Array("jpg","png","jpeg");
  var file_extension = fileName.split('.').pop().toLowerCase(); 

  if(allowed_extensions.includes(file_extension))
  {
     document.getElementById('imageerror').innerHTML="";
  }
  else
  {
    document.getElementById('imageerror').innerHTML="Afbeelding moet een extensie zijn: .jpg .jpeg .png";
  }
  
  
});
  $("#email").keyup(function(){
   
      var email = $("#email").val();
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (!filter.test(email)) {
        //alert('Please provide a valid email address');
        $("#emptyemail").text(email+" is geen geldig e-mailadres");
        email.focus;
        //return false;
      } else {
          $("#emptyemail").text("");
      }
  });
  $("#firstname").keyup(function(){
   
    var firstname = $("#firstname").val();
 
    if(firstname == "")
    {
      $("#firstnameempty").text("Voornaam is verplicht veld");
    }
    else {
        $("#firstnameempty").text("");
    }
   });

  $("#lastname").keyup(function(){
   
   var lastname = $("#lastname").val();

   if(lastname == "")
   {
     $("#lastnameempty").text(lastname+" is verplicht veld");
   }
   else {
       $("#lastnameempty").text("");
   }
  });
  $("#phone").keyup(function(){
   
    var phone = $("#phone").val();
 
    var filter = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    if (!filter.test(phone)) {
      //alert('Please provide a valid email address');
      $("#phoneerror").text(phone+" is geen geldig phone");
      email.focus;
      //return false;
    } else {
        $("#phoneerror").text("");
    }
   });
 

  $("#instagram").keyup(function(){
   
   var instagram = $("#instagram").val();
   var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
   if (!filter.test(instagram)) {
     //alert('Please provide a valid email address');
     $("#instagramerror").text(instagram+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
     instagram.focus;
     //return false;
   } else {
       $("#instagramerror").text("");
   }
  });

  $("#linkedin").keyup(function(){
   
    var linkedin = $("#linkedin").val();
    var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
    if (!filter.test(linkedin)) {
      //alert('Please provide a valid email address');
      $("#linkedinerror").text(linkedin+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
      linkedin.focus;
      //return false;
    } else {
        $("#linkedinerror").text("");
    }
   });
   $("#facebook").keyup(function(){
   
    var facebook = $("#facebook").val();
    var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
    if (!filter.test(facebook)) {
      //alert('Please provide a valid email address');
      $("#facebookerror").text(facebook+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
      facebook.focus;
      //return false;
    } else {
        $("#facebookerror").text("");
    }
   });

  $('#insertinfo').on('submit', function(e){
    
    

    let fname = $('#firstname').val();
    let lname = $('#lastname').val();
    let email = $('#email').val();
    let address = $('#autocomplete').val();


    let errors = [];
    let regemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let regurl = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
    

    if(email == "")
    {
       errors.push = "Mistake";
       
       document.getElementById('emptyemail').innerHTML = "Email address is verplicht veld";
       e.preventDefault();
    }
    else if(!regemail.test(email))
    {
      errors.push = "Mistake";
      
      document.getElementById('emptyemail').innerHTML = "Verkeerd email adres";
      e.preventDefault();
    }
    else
    {
      document.getElementById('emptyemail').innerHTML = "";
     
    }

    if(fname == "")
    {
      document.getElementById("firstnameempty").innerHTML = "Voornaam is verplicht veld";
      errors.push = "Mistake";
      e.preventDefault();
      
    }
    if(lname == "")
    {
      document.getElementById("lastnameempty").innerHTML = "Achternaam is verplicht veld";
      errors.push = "Mistake";
      e.preventDefault();
    }
   
    if(address == "")
    {
        errors.push = "Mistake";
        document.getElementById('address-er').innerHTML = "Adres is verplicht veld";
        e.preventDefault();
    }
  
    
    if(errors.length == 0)
    {
      return true;
    }
   
    




  });
