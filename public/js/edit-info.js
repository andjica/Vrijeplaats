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

  $("#email2").keyup(function(){
   
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
$("#firstname2").keyup(function(){
 
  var firstname = $("#firstname2").val();

  if(firstname == "")
  {
    $("#firstname2empty").text("Voornaam is verplicht veld");
  }
  else {
      $("#firstname2empty").text("");
  }
 });

$("#lastname2").keyup(function(){
 
 var lastname = $("#lastname2").val();

 if(lastname == "")
 {
   $("#lastname2empty").text(lastname+" is verplicht veld");
 }
 else {
     $("#lastname2empty").text("");
 }
});
$("#phone2").keyup(function(){
 
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


$("#instagram2").keyup(function(){
 
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

$("#linkedin2").keyup(function(){
 
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
 $("#facebook2").keyup(function(){
 
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
 


  let errors = [];
  let regemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  let regurl = /^(https?:\/\/(?:www\.|(?!www))[^\s\.]+\.[^\s]{2,}|www\.[^\s]+\.[^\s]{2,})/;
  

  if(email == "")
  {
     errors.push = "Mistake";
     
     document.getElementById('empty2email').innerHTML = "Email address is verplicht veld";
     e.preventDefault();
  }
  else if(!regemail.test(email))
  {
    errors.push = "Mistake";
    
    document.getElementById('empty2email').innerHTML = "Verkeerd email adres";
    e.preventDefault();
  }
  else
  {
    document.getElementById('empty2email').innerHTML = "";
   
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
 


  
  if(errors.length == 0)
  {
    return true;
  }
 
  




});
