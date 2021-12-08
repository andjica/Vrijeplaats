$("#contactperson").on('keyup' , function(){
   
    var contactperson = $("#contactperson").val();
 
    if(contactperson == "")
    {
      $("#er-contactperson").text("Naam  is verplicht veld");
    }
    else {
        $("#er-contactperson").text("");
    }
   });

   $("#lastname").on('keyup' , function(){
  
    var lastname = $("#lastname").val();
 
    if(lastname == "")
    {
      $("#er-clastname").text("Achternaam is verplicht veld");
    }
    else {
        $("#er-lastname").text("");
    }
   });
 
   $("#naambedrijf").on('keyup' ,function(){
    
    var naambedrijf = $("#naambedrijf").val();
 
    if(naambedrijf == "")
    {
      $("#er-naambedrijf").text("Naambedrijf is verplicht veld");
    }
    else {
        $("#er-naambedrijf").text("");
    }
   });
 
   $("#autocomplete").on('keyup' ,function(){
    
    var adres = $("#autocomplete").val();
 
    if(adres == "")
    {
      $("#er-adres").text("Adres is verplicht veld");
    }
    else {
        $("#er-adres").text("");
    }
   });
 
   $("#postcode").on('keyup' ,function(){
    
    var postcode = $("#postcode").val();
 
    if(postcode == "")
    {
      $("#er-postcode").text("Postc. Woonpl. is verplicht veld");
    }
    else {
        $("#er-postcode").text("");
    }
   });
 
   $("#telefoon").on('keyup' ,function(){
    
    var telefoon = $("#telefoon").val();
 
    var filter = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    if (!filter.test(telefoon)) {
      //alert('Please provide a valid email address');
      $("#er-telefoon").text(telefoon+" is geen geldig phone");
      telefoon.focus;
      //return false;
    } else {
        $("#er-telefoon").text("");
    }
   });
 
   $("#email").on('keyup' ,function(){
    
    var email = $("#email").val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) {
      //alert('Please provide a valid email address');
      $("#er-email").text(email+" is geen geldig e-mailadres");
      email.focus;
      //return false;
    } else {
        $("#er-email").text("");
    }
 });
 
 $("#signature").on('keyup' ,function(){
    
    var signature = $("#signature").val();
 
    if(signature == "")
    {
      $("#er-signature").text("Handtekening opdrachtgever is verplicht veld");
    }
    else {
        $("#er-signature").text("");
    }
   });
 
   $('#becomepartner').on('submit', function(e){
     
     var nameofperson = $("#contactperson").val();
     var lastname = $("#lastname").val();
     var companyname = $("#naambedrijf").val();
     var address = $("#autocomplete").val();
     var postcode = $("#postcode").val();
     var phone = $("#telefoon").val();
     var emailaddress = $("#email").val();
     var signaturecompany = $("#signature").val();
   
     var errors = [];
     var regemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 
     if(nameofperson == "")
     {
        e.preventDefault();
        errors.push = "Mistake";
       
        document.getElementById('er-contactperson').innerHTML = "Naam en achternaam is verplicht veld";
       
     }
     else
     {
       document.getElementById('er-contactperson').innerHTML = "";
      
     }

     if(lastname == "")
     {
        e.preventDefault();
        errors.push = "Mistake";
       
        document.getElementById('er-lastname').innerHTML = "Achternaam is verplicht veld";
       
     }
     else
     {
       document.getElementById('er-lastname').innerHTML = "";
      
     }
     
 
     if(companyname == "")
     {
        e.preventDefault();
        errors.push = "Mistake";
       
        document.getElementById('er-naambedrijf').innerHTML = "Naambedrijf is verplicht veld";
       
     }
     else
     {
       document.getElementById('er-naambedrijf').innerHTML = "";
      
     }
 
     if(address == "")
     {
        e.preventDefault();
        errors.push = "Mistake";
       
        document.getElementById('er-adres').innerHTML = "Adres is verplicht veld";
       
     }
     else
     {
       document.getElementById('er-adres').innerHTML = "";
      
     }
 
     if(postcode == "")
     {
        e.preventDefault();
        errors.push = "Mistake";
       
        document.getElementById('er-postcode').innerHTML = "Postc. Woonpl. is verplicht veld";
       
     }
     else
     {
       document.getElementById('er-postcode').innerHTML = "";
      
     }
 
     if(phone == "")
     {
        e.preventDefault();
        errors.push = "Mistake";
       
        document.getElementById('er-telefoon').innerHTML = "Telefoon is verplicht veld";
       
     }
     else
     {
       document.getElementById('er-telefoon').innerHTML = "";
      
     }
 
     if(emailaddress == "")
     {
        e.preventDefault();
        errors.push = "Mistake";
       
        document.getElementById('er-email').innerHTML = "Email address is verplicht veld";
       
     }
     else
     {
       document.getElementById('er-email').innerHTML = "";
      
     }
 
     if(signaturecompany == "")
     {
        e.preventDefault();
        errors.push = "Mistake";
       
        document.getElementById('er-signature').innerHTML = "Handtekening opdrachtgever is verplicht veld";
       
     }
     else
     {
       document.getElementById('er-signature').innerHTML = "";
      
     }
 
     
    
     if(errors.length == 0)
     {
       return true;
     }
 
   });