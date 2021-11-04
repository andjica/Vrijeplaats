
       
    $('#key-word').on('keyup',function(){
      
       let andjica = $('#key-word').val().toLowerCase();
       
       $("#andjicasearch li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(andjica) > -1)
      });
  
   
      });
  
      $('#region').on('keyup',function(){
      
      let andjica2 = $('#region').val().toLowerCase();
  
          $("#cities li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(andjica2) > -1)
      });
   });


   
       
   $('#key-word2').on('keyup',function(){
      
    let andjica = $('#key-word2').val().toLowerCase();
    
    $("#andjicasearch2 li").filter(function() {
     $(this).toggle($(this).text().toLowerCase().indexOf(andjica) > -1)
   });


   });

   $('#region2').on('keyup',function(){
   
   let andjica2 = $('#region2').val().toLowerCase();

       $("#cities2 li").filter(function() {
       $(this).toggle($(this).text().toLowerCase().indexOf(andjica2) > -1)
   });
});
