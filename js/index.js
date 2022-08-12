$(document).ready(function(){
    
$.ajax ({
    type:'POST',
    url:'includes/funciones/cargar_municipios.php',
   
})

.done(function(listas){
$('#municipios').html(listas)

})
    .fail(function(){
        alert('Hubo un error al cargar municipios')
         })
})

