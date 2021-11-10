$('#usercategory2').on('change', function(){
  let findrole = $(this).find(":selected").val();

  if(findrole == "Company")
  {
    
     document.getElementById('findrole').style.display = "block";
  }
  else if(findrole == "USER")
  {
     
       document.getElementById('findrole2').style.display = "none";
    
     
  }
  else
  {
    document.getElementById('findrole').style.display = "none";
  }

  

});

$('#userimage2').change(function(e){
    var fileName = e.target.files[0].name;
    // alert(fileName + ' is the selected file .');
  
    var allowed_extensions = new Array("jpg","png","jpeg");
    var file_extension = fileName.split('.').pop().toLowerCase(); 
  
    if(allowed_extensions.includes(file_extension))
    {
       document.getElementById('imageerror2').innerHTML="";
    }
    else
    {
      document.getElementById('imageerror2').innerHTML="Afbeelding moet een extensie zijn: .jpg .jpeg .png";
    }
    
    
  });
  $("#companykvk").on('keyup',function(){
   
    var companykvk = $("#companykvk").val();
    var filter = /^[0-9]*$/;
    if (!filter.test(companykvk)) {
      //alert('Please provide a valid email address');
      $("#companykvk-er").text(companykvk +" Bedrijf kvk nummer moet in nummer staan");
      companykvk.focus;
      //return false;
    } else {
        $("#companykvk-er").text("");
    }
});
  
  $("#email2").on('keyup',function(){
   
    var email = $("#email2").val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) {
      //alert('Please provide a valid email address');
      $("#empty2email").text(email+" is geen geldig e-mailadres");
      email.focus;
      //return false;
    } else {
        $("#empty2email").text("");
    }
});
$("#firstname2").on('keyup',function(){
 
  var firstname = $("#firstname2").val();

  if(firstname == "")
  {
    $("#firstname2empty").text("Voornaam is verplicht veld");
  }
  else {
      $("#firstname2empty").text("");
  }
 });

$("#lastname2").on('keyup',function(){
 
 var lastname = $("#lastname2").val();

 if(lastname == "")
 {
   $("#lastname2empty").text(lastname+" is verplicht veld");
 }
 else {
     $("#lastname2empty").text("");
 }
});
$("#phone2").on('keyup',function(){
 
  var phone = $("#phone2").val();

  var filter = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
  if (!filter.test(phone)) {
    //alert('Please provide a valid email address');
    $("#phone2error").text(phone+" is geen geldig phone");
    email.focus;
    //return false;
  } else {
      $("#phone2error").text("");
  }
 });


$("#instagram2").on('keyup',function(){
 
 var instagram = $("#instagram2").val();
 var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
 if (!filter.test(instagram)) {
   //alert('Please provide a valid email address');
   $("#instagram2error").text(instagram+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
   instagram.focus;
   //return false;
 } else {
     $("#instagram2error").text("");
 }
});

$("#linkedin2").on('keyup',function(){
 
  var linkedin = $("#linkedin2").val();
  var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
  if (!filter.test(linkedin)) {
    //alert('Please provide a valid email address');
    $("#linkedin2error").text(linkedin+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
    linkedin.focus;
    //return false;
  } else {
      $("#linkedin2error").text("");
  }
 });
 $("#facebook2").on('keyup',function(){
 
  var facebook = $("#facebook2").val();
  var filter = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
  if (!filter.test(facebook)) {
    //alert('Please provide a valid email address');
    $("#facebook2error").text(facebook+" moet zijn zoals url: http://localhost/vrijeplaats/public/bewerk-profiel");
    facebook.focus;
    //return false;
  } else {
      $("#facebook2error").text("");
  }
 });

$('#editinfo').on('submit', function(e){
  
  
  
  let fname = $('#firstname2').val();
  let lname = $('#lastname2').val();
  let email = $('#email2').val();
  let address = $('#autocomplete').val();
  // let companykvk = $('#companykvk').val();


  let errors = [];
  // let regemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  // let regurl = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
  

  if(email == "")
  {
     errors.push = "Mistake";
     
     document.getElementById('empty2email').innerHTML = "Email address is verplicht veld";
     e.preventDefault();
  }
 

  if(fname == "")
  {
    document.getElementById("firstname2empty").innerHTML = "Voornaam is verplicht veld";
    errors.push = "Mistake";
    e.preventDefault();
    
  }
  if(lname == "")
  {
    
    document.getElementById("lastname2empty").innerHTML = "Achternaam is verplicht veld";
    errors.push = "Mistake";
    e.preventDefault();
  }

  if(address == "")
  {
        errors.push = "Mistake";
        document.getElementById('address-er').innerHTML = "Adres is verplicht veld";
        e.preventDefault();
  }

  // if(companykvk == "")
  // {
  //   errors.push = "Mistake";
  //   document.getElementById('companykvk-er').innerHTML = "Company KVK is verplicht veld";
  //   e.preventDefault();
  // }
 


  
  if(errors.length == 0)
  {
    return true;
  }
 
  




});
