// document.addEventListener("DOMContentLoaded", function() {
//     document.getElementById("form").addEventListener('submit', validarFormulario); 

//   });

//   function validarFormulario(){
//     $('.alert').show();
//   }

  $("form").on( "submit", function() {
    //event.preventDefault();
    //alert("hola");
    console.log( $( this ).serialize() );
  });

  
  $(document).ready(function () {
    $('#entradafilter').keyup(function () {
       var rex = new RegExp($(this).val(), 'i');
         $('.contenidobusqueda tr').hide();
         $('.contenidobusqueda tr').filter(function () {
             return rex.test($(this).text());
         }).show();
 
         })
 
 });