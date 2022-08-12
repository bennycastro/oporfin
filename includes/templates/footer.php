
<div class="footer-contacto">
 <section class="contactos seccion">
  <div class="espacio"></div>
  <h2>Estaremos encantados de atenderte:</h2>
  
  <div class="contenedor ">
    <ul class="lista-contacto clearfix ">
      <li>
        <div class="barra-contacto">
          <i class="fa-regular fa-clock"></i>
          <h3>Lunes a Viernes</h3>
          <p>9AM a 7PM</p>
          <h3>Sábados</h3>
          <p>10AM a 3PM</p>
         
        </div>
      </li>
      <li>
        <div class="barra-contacto">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00d586" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            <path d="M15 7a2 2 0 0 1 2 2" />
            <path d="M15 3a6 6 0 0 1 6 6" />
          </svg>
          <h3>Solicítalo por teléfono</h3>
          <p>(55)7160-65-34</p>
         
            
         
        </div>
      </li>
      <li>
        <div class="barra-contacto">
          <i class="fa-regular fa-circle-question"></i>
          <h3>Tienes alguna duda?</h3>
          <p>Preguntas frecuentes</p> 
          
          
          
        </div>
      </li>
      <li>
        <div class="barra-contacto">
          <i class="fa-regular fa-envelope"></i>
          <h3>Escríbenos</h3>
          <p>info@oporfin.mx</p> 
          
    
        </div>
      </li>
    </ul>
  </div>
 </section>
</div>
<script type="text/javascript" src="js/main2.js"></script>  
   <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
   <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  
  <script type="text/javascript" src="js/main2.js"></script>  
  <script>

    /*obtengo los valores iniciales de mis elementos*/
 var slider = document.getElementById("estimador");
 var output = document.getElementById("valor");
 var salida = document.getElementById("pagoQuincenal");
 
 
 
 /*formateador numero a moneda*/
 const f= new Intl.NumberFormat('en-US',{
   style:'currency', currency:'USD',
   minimumFractionDigits:0
 });
 /*Cirre de formateador numero a moneda*/
 
 output.innerHTML =f.format((slider.value));/*Imprime valor inicial del importe solicitado*/
 
 /*Imprime los importes en el estimado (importe solicitado y pago quincenal estimado)*/
 slider.oninput = function() {
   output.innerHTML =f.format((this.value));
   salida.innerHTML =f.format(((this.value)/48)*(1.7)); /*quincenas (48)x el interes quincenal*/
 }/*Cierre de Imprime los importes en el estimado (importe solicitado y pago quincenal estimado)*/
 
 /*Colorea el Input Range inicial*/
 var x =slider.value;
   var color = 'linear-gradient(90deg, rgb(117,252,117)' + x/1000 + '%, rgb(214,214,214)' + x/1000 + '%)';
   slider.style.background=color;/*Cierre Colorea el Input Range inicial*/
   
 slider.addEventListener("mousemove", function(){/*Colorea la actualizacion del Input Range*/
   
   var x =slider.value;
   var color = 'linear-gradient(90deg, rgb(117,252,117)' + x/1000 + '%, rgb(214,214,214)' + x/1000 + '%)';
   slider.style.background=color;
 }/*Ciere Colorea la actualizacion del Input Range*/
 
 );
 
   </script>

