<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>OPORFIN | Oportunidades Financieras</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/open.js"></script>
    <link rel="icon" type="image/png" href="img/favicon.png" />
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
<script>
  
</script>
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  

  <header id="site_header" class="site-header">
    <div class="barra">
      <div class="contenedor">
        <div class="logo"><a href="/"><img src="img/logo_oporfin.svg" alt="logo oporfin"></a></div>
        
        <div class="menu-movil">
  
            <span> </span>
            <span></span>
            <span></span>
            
        </div>
     
     
      </div>
    </div>
    <!------------------------------------------------------------------<div class="hero-aux">
 
    
    </div>-----------------------------------------Seccion Nombre-------------------------------------------------->
  
  <section class="seccion contenedor2">
    <h2 class="titulo">¡Hola! <span  class="remarcado">¿Cual es tu nombre?</span></h2>
    <form  class="registro" method="post">

    <div class="registro caja ">
          <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"  tabindex="1" onblur="validaCampos()">
            
          </div>
          <div class="campo">
            <label for="segundo-nombre">Segundo nombre:</label>
            <input type="text" id="segundo-nombre" name="segundo-nombre" tabindex="2">
          </div>
          <div class="campo">
            <label for="apellido-paterno">Apellido paterno:</label>
            <input type="text" id="apellido-paterno" name="apellido-paterno"  tabindex="3">
          </div>
          <div class="campo">
            <label for="apellido-materno">Apellido materno:</label>
            <input type="text" id="apellido-materno" name="apellido-materno" tabindex="4">
          </div>
          <div class="campo">
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" size="30" tabindex="5"required> 
          </div>
          
          <div id="error"  class="error">
          
            
          
          

          </div>
        </div>
        <div><br>
          <input type="checkbox" id="buro" class="check "> <label for="buro" >
            Acepto que se consulte mi historial crediticio en las Sociedades de Información Crediticia.</label>
             <h3 class="justify">Por este conducto autorizo expresamente a OPORFIN, para que por conducto de sus funcionarios facultados lleve a cabo investigaciones sobre mi comportamiento crediticio en las Sociedades de Información Crediticia que estime conveniente. Así mismo, declaro que conozco la naturaleza y alcance de la información que se solicitara, del uso que OPORFIN hará de tal información y de que esta podrá realizar consultas periódicas de mi historial crediticio, consintiendo que esta autorización se encuentra vigente por un periodo de 3 años contados a partir de la fecha de su expedición y en todo caso durante el tiempo que mantengamos relación jurídica.</h3>
</div>
<div>       
          <input type="checkbox" id="privacidad" class="check-priv "> <label for="privacidad" >
            He leído y acepto las políticas de privacidad</label>
          </div><br>
          <div >
              <input type="checkbox" id="notificaciones" class="check-priv "> <label for="notificaciones" >
                 Acepto recibir noticias, ofertas e información relevante sobre mi cuenta.</label>
          </div>
          <div id="error"  class="error"></div>
        <div id="botones" >
          <div class="atras">
          <a href="index.html"> <input type="button" id="atras" class="button" value="Atrás"></a>
           </div>
          <div class="siguiente">
           <input type="button" id="open_curp" class="button" value="Siguiente">
          </div><!-------------------------------------------Seccion Nombre-------------------------------------------------->
       
<!--------------------------------------------------Ventana Modal Curp-------------------------------------------------->
<div id="modal_container_name" class="modal-container_name">
  <div class="modal_name">
    <section class="seccion contenedor2">
      <h2>Completa tu información <span class="remarcado"> para continuar </span></h2>
    <div class="registro caja-1-row  ">
      <div class="campo">
        <label for="nombre">Ingresa tu CURP:</label>
        <input type="text" id="curp" name="nombre"  tabindex="6">
      </div>
      <div class="campo">
        <label for="segundo-nombre">Tu número celular:</label>
        <input type="text" id="segundo-nombre" name="segundo-nombre" tabindex="7">
      </div>
      <div class="campo">
        <label for="apellido-paterno">Teléfono de casa:</label>
        <input type="text" id="apellido-paterno" name="apellido-paterno"  tabindex="8">
      </div> 
      <div id="error2"  class="error"></div>
      
        <div id="botones" >
          <div class="atras">
          <input type="button" id="atras_curp" class="button" value="Atrás" onclick="cerrar_modal()"tabindex="10"> 
           </div>
          <div class="siguiente">
            <input type="button" id="open_direccion" class="button" value="Siguiente"tabindex="9" >
          </div>      
      </div>
     </section>
  
    </div>
  </div><!--------------------------------------------Cierre Ventana Curp-------------------------------------------------->
        
<!----------------------------------------Ventana Modal mail---------------------------------------------------------->
<div id="modal_container_mail" class="modal-container_mail">
  <div class="modal_mail">
    <section class="seccion contenedor2">
      <h2>Por favor, completa tu <span  class="remarcado">registro</span></h2>
    
        <div class="registro caja ">
            <div class="campo">
              <label for="correo">Ingresa tu correo:</label>
              <input type="email" id="correo" name="correo"  tabindex="11">
            </div>
            <div class="campo">
              <label for="confirma-correo">Confirma tu correo:</label>
              <input type="email" id="sconfirma-correo" name="confirma-correo" tabindex="12">
            </div>
            <div class="campo">
              <label for="contrasena">Ingresa tu contraseña:</label>
              <input type="password" id="contrasena" name="contrasena"  tabindex="13">
            </div>
            <div class="campo">
              <label for="confirma-contrasena">confirma tu contraseña:</label>
              <input type="password" id="confirma-contrasena" name="confirma-contrasena" tabindex="14">
            </div>
            
          </div>
          <div><br>
            <input type="checkbox" id="buro" class="check "> <label for="buro" >
              Acepto que se consulte mi historial crediticio en las Sociedades de Información Crediticia.</label>
               <h3 class="justify">Por este conducto autorizo expresamente a OPORFIN, para que por conducto de sus funcionarios facultados lleve a cabo investigaciones sobre mi comportamiento crediticio en las Sociedades de Información Crediticia que estime conveniente. Así mismo, declaro que conozco la naturaleza y alcance de la información que se solicitara, del uso que OPORFIN hará de tal información y de que esta podrá realizar consultas periódicas de mi historial crediticio, consintiendo que esta autorización se encuentra vigente por un periodo de 3 años contados a partir de la fecha de su expedición y en todo caso durante el tiempo que mantengamos relación jurídica.</h3>
  </div>
  <div>       
            <input type="checkbox" id="privacidad" class="check-priv "> <label for="privacidad" >
              He leído y acepto las políticas de privacidad</label>
            </div><br>
            <div >
                <input type="checkbox" id="notificaciones" class="check-priv "> <label for="notificaciones" >
                   Acepto recibir noticias, ofertas e información relevante sobre mi cuenta.</label>
                
            </div>
                  <div class="error"></div>
          <div id="botones" >
            <div class="atras">
             <input type="button" id="atras_mail" class="button" value="Atrás" onclick="cerrar_modal()"> 
             </div>
            <div class="siguiente">
             <input type="button" id="open_direccion" class="button" value="Siguiente">
            </div>
          </div>
          </section>
    </div>
  </div><!----------------------------------Cierre Ventana Mail------------------------------------------->

<!----------------------------------------Ventana Modal Direccion---------------------------------------------------------->
<div id="modal_container_direccion" class="modal-container_direccion">
  <div class="modal_direccion">
    <section class="seccion contenedor2">
      <h2>¿En donde <span  class="remarcado">vives?</span></h2>
 
      <div  class="registro caja ">
            <div class="campo">
  
              <label for="nombre">Tipo de vivienda:</label>
              <select id="vivienda" name="Vivienda" tabindex="11">
                <option selected>Selecciona una opción</option>
                <option>Rento</option>
                <option>Casa Propia</option>
                <option>Casa de algun familiar o amigo</option>
                
                </select>
              
            </div>
            <div class="campo">
              <label for="segundo-nombre">Calle</label>
              <input type="text" id="segundo-nombre" name="segundo-nombre" tabindex="12">
            </div>
            <div class="campo">
              <label for="apellido-paterno">Número exterior:</label>
              <input type="text" id="apellido-paterno" name="apellido-paterno"  tabindex="13">
            </div>
            <div class="campo">
              <label for="apellido-materno">Número interior:</label>
              <input type="text" id="apellido-materno" name="apellido-materno" tabindex="14">
            </div>
            <div class="campo">
              <label for="correo">Código postal:</label>
              <input type="email" id="correo" name="correo"  tabindex="15">
            </div>
            <div class="campo">
                <?php
                    try {
                        require_once('includes/funciones/bd_conexion.php');
                        $sql =" SELECT * FROM colonias ";
                        $resultado =$conn ->query($sql);
                        
                    } catch(\Exception $e){
                        echo $e->getMessage();
                    }

                ?>    <div class="colonias">
                    <?php
                        $colonia =$resultado->fetch_assoc();     ?>

                        <pre>
                        <?php var_dump ($colonia);?>
                        </pre>
                        <?php
                        $conn->close();
                        ?>

               
              <label for="segundo-nombre">Colonia</label>
              <input type="text" id="segundo-nombre" name="segundo-nombre" tabindex="16">
            </div>
            <div class="campo">
              <label for="apellido-paterno">Alcaldia:</label>
              <input type="text" id="apellido-paterno" name="apellido-paterno"  tabindex="17">
            </div>
            <div class="campo">
              <label for="apellido-materno">Ciudad:</label>
              <input type="text" id="apellido-materno" name="apellido-materno" tabindex="18">
            </div>
                 
            </div>
          
         
          <div id="botones" >
            <div class="atras" tabindex="10">
             <input type="button" id="atras_direccion" class="button" value="Atrás" onclick="cerrar_modal()"> 
             </div>
            <div class="siguiente"tabindex="9">
              <input type="button" id="open_familiar" class="button" value="Siguiente" >
            </div>
          </div>
       
        </section> 
    </div>
  </div><!----------------------------------Cierre Ventana Direccion------------------------------------------->

<!----------------------------------------Ventana Modal familiar---------------------------------------------------------->
<div id="modal_container_familiar" class="modal-container_familiar">
  <div class="modal_familiar">
    <section class="seccion contenedor2">
      <h2 class="titulo">Cuéntanos <span  class="remarcado">un poco mas</span></h2>
    
  
      <div id="datos1-usuario" class="registro caja ">
            <div class="campo">
              <label for="nombre">Estado Civil:</label>
              <select name="estado_civil"tabindex="111">
  
                <option value="1">Selecciona una Opción</option>
                
                <option value="2">Soltero/a</option>
                
                <option value="3">Casado/a</option>
                <option value="4">Union Libre</option>
                <option value="5">Divorciado/a</option>
                <option value="6">Viudo/a</option>
                
                </select>
            </div>
            <div class="campo">
              <label for="segundo-nombre">¿Para que necesitas el préstamo?</label>
              <select name="motivo"tabindex="112">
  
              <option value="1">Selecciona una Opción</option>
              <option value="2">Refinanciamiento</option>
              <option value="3">Pagar Deudas</option>
              <option value="4">Viaje</option>
              <option value="5">Gastos Escolares</option>
              <option value="6">Compras</option>
              <option value="7">Impulsar tu negocio</option>
              <option value="8">Emergencias Médicas</option>
              <option value="9">Diversión/option>
              <option value="10">Mejoras a tu Auto</option>
              <option value="11">Reparaciones en el Hogar</option>
              <option value="12">otro</option>
              
              </select>
            </div>
         
          </div>
         
          <div id="botones" >
            <div class="atras">
             <input type="button" id="atras_trabajo" class="button" value="Atrás" onclick="cerrar_modal()"> 
             </div>
            <div class="siguiente">
             <input type="button" id="open_trabajo" class="button" value="Siguiente">
            </div>
           
          
           
          
        </section> 
    </div>
  </div><!----------------------------------Cierre Ventana familiar------------------------------------------->


<!--------------------------------------------------Ventana Modal Trabajo-------------------------------------------------->
<div id="modal_container_trabajo" class="modal-container_trabajo">
  <div class="modal_trabajo">
    <section class="seccion contenedor2">
      <h2 class="titulo">Cuéntanos sobre tu <span  class="remarcado">situación laboral</span></h2>
    
      
    <div id="datos-usuario" class="registro caja ">
            <div class="campo">
              <label for="nivel_estudios">Nivel de estudios</label>
              <select id = "estudios" name="estudios"tabindex="111" >
  
                <option value="">Selecciona una Opción</option>
                <option value="POST">Postgrado/Maestría</option>
                <option value="UNIV">Universidad</option>
                <option value="PREP">Preparatoria o Carrera Técnica</option>
                <option value="SECU">Secundaria</option>
                <option value="PRIM">Primaria</option>
        
                
                </select>
            </div>
            <div class="campo">
              <label for="sit_laboral">¿Cuál es tu situación laboral?</label>
              <select id="sit_laboral" name="sit_laboral"tabindex="1111" onchange="ShowSelected()" >
  
                <option value="">Selecciona una Opción</option>
                <option value="TIIN">Contrato por Tiempo Indefinido</option>
                <option value="COTE">Contrato Temporal</option>
                <option value="NEPR">Negocio Propio</option>
                <option value="JUBI">Jubilado/a</option>
                <option value="ESTU">Estudiante</option>
                <option value="DESE">Desempleado</option>
                <option value="TRIF">Trabajador Independiente/Freelance</option>
                <option value="AMCA">Ama de Casa</option>
            
                </select>
            </div>
        
            <div id="nombre_empresa" class="campo">
              <label for="empresa">Nombre de la empresa:</label>
              <input type="text"  name="empresa"  tabindex="13">
            </div>
  
  
  
            <div id="antiguedad" class="campo">
              <label for="anti">Antiguedad:</label>
              <input type="text"  name="anti" tabindex="41">
            </div>
  
  
            <div id="industria" class="campo">
              <label for="industria">Industria:</label>
              <select name="industria"tabindex="51">
  
                <option value="1">Selecciona una Opción</option>
                <option value="2">Aliemtos</option>
                <option value="3">Apuestas y Sorteos</option>
                <option value="4">Automotriz</option>
                <option value="5">Comercio de Armas</option>
                <option value="6">Comercio de Divisas</option>
                <option value="7">Comercio de Joyera y Arte</option>
                <option value="8">Construcción</option>
                <option value="9">Entretenimiento para Adultos</option>
                <option value="10">Hotelería y Turismo</option>
                <option value="11">Recivlaje</option>
                <option value="12">Servicios</option>
                <option value="13">Servicios Financieros</option>
                <option value="14">Ventas Mayoreo</option>
                <option value="15">Ventas Menudeo</option>
            
                 </select>
                  </div>
                <div id="pensionado" class="campo">
                  <label for="pensionado">Pensionado Por:</label>
                  <select name="pensionado"tabindex="61">
      
                    <option value="1">Selecciona una Opción</option>
                    <option value="2">IMSS</option>
                    <option value="3">ISSSTE</option>
                    <option value="4">Sector Privado</option>
                  </select>
                  </div>
                  <div id="institución" class="campo">
                    <label for="institución">Institución:</label>
                    <select name="institución"tabindex="71">
        
                      <option value="1">Selecciona una Opción</option>
                      <option value="2">Universidad Nacional Autónoma de México</option>
                      <option value="3">Instituto Politécnico Nacional</option>
                      <option value="4">Universidad Autónoma Metropolitana</option>
                      <option value="5">Universidad Iberoamericana</option>
                      <option value="6">Universidad Autónoma del Estado de México</option>
                      <option value="7">Universidad Tecnológica de México</option>
                      <option value="8">Universidad de Monterrey</option>
                      <option value="9">Otra</option>
                      
                  
                       </select>
                      </div>
                       <div id="otra_institucion" class="campo">
                        <label for="otra_institucion">Institución:</label>
                        <input type="text"  name="otra_institucion" tabindex="11">
                      </div>
                       
                
                 
                   
            </div>
          
         
          <div id="botones" >
            <div class="atras">
             <input type="button" id="atras_familia" class="button" value="Atrás" onclick="cerrar_modal()"> 
             </div>
            <div class="siguiente">
             <input type="button" id="open_ingresos" class="button" value="Siguiente">
            </div>
           
          
           
      </div>
     </section>
  
    </div>
  </div><!------------------------------------------Cierre Ventana Trabajo-------------------------------------------------->
<!----------------------------------------Ventana Modal Ingresos---------------------------------------------------------->
<div id="modal_container_ingresos" class="modal-container_ingresos">
  <div class="modal_ingresos">
    <section class="seccion contenedor2">
      <h2 class="titulo">¿Cual es <span  class="remarcado">tu ingreso ?</span></h2>
     
        <div id="datos1-usuario" class="registro caja-1-row  ">
              <div class="campo">
                <label for="nombre">Ingresos comprobables después de impuestos:</label>
                <input type="text" id="nombre" name="nombre"  tabindex="11">
              </div>
             
              <div class="error"></div>
              <div id="botones" >
                <div class="atras">
                <input type="button" id="atras_ingresos" class="button" value="Atrás" onclick="cerrar_modal()">  
                 </div>
                <div class="siguiente">
                  <input type="button" id="open" class="button" value="Aplicar solicitud">
                </div>
           

    </div>
  </div><!----------------------------------Cierre Ventana Ingresos------------------------------------------->


         
        </form><!------------------------------------------Cierre Formulario------------------------------------------------->
      </section><!------------------------------------------Cierre seccion contenedor-------------------------------------------------> 

  <!--Ventana Mensaje-->
            <div id="modal_container" class="modal-container">
              <div class="modal">
               <section>
                  <h2>¡Muchas Felicidades por completar tu solicitud!</h2>
                  
                  <div class="contenedor ">
                    <ul>                    
                      <li>
                        <div >
                          
                          <p>Uno de nuestros asesores te contactará en un periodo no mayor a 24 horas  para darte excelentes noticias sobre tu solicitud.</p>
                          
                          <p>Te recordamos tener a la mano la documentación requerida.</p>
                          <ul>
                            <li>INE</li>
                            <li>Comprobante de domicilio</li>
                            <li>Comprobante de ingresos</li>
                          </ul>
                          <br>
                          <p>Recuerda que tu trámite es completamente gratuito, ninguno de nuestros asesores, te pedira que realices algun tipo de pago, si esto sucede por favor reportalo inmediatamente a nuestro tel (55)7160-6534 o a nuestra cuenta de correo atencion@oporfin.mx</p>
                            
                        
                        </div>
                      </li>
                     
                    </ul>
                  </div><div class="espacio"></div>
                 </section>
                <a href="index.html" class="button">Cerrar</a>
                </div>
              </div><!--Cierre Ventana Mensaje-->
                <!--Ventana Mensaje-->
            <div id="modal_container" class="modal-container">
              <div class="modal">
               <section>
                  <h2>¡Muchas Felicidades por completar tu solicitud!</h2>
                  
                  <div class="contenedor ">
                    <ul>                    
                      <li>
                        <div >
                          
                          <p>Uno de nuestros asesores te contactará en un periodo no mayor a 24 horas  para darte excelentes noticias sobre tu solicitud.</p>
                          
                          <p>Te recordamos tener a la mano la documentación requerida.</p>
                          <ul>
                            <li>INE</li>
                            <li>Comprobante de domicilio</li>
                            <li>Comprobante de ingresos</li>
                          </ul>
                          <br>
                          <p>Recuerda que tu trámite es completamente gratuito, ninguno de nuestros asesores, te pedira que realices algun tipo de pago, si esto sucede por favor reportalo inmediatamente a nuestro tel (55)7160-6534 o a nuestra cuenta de correo atencion@oporfin.mx</p>
                            
                        
                        </div>
                      </li>
                     
                    </ul>
                  </div><div class="espacio"></div>
                 </section>
                <a href="index.html" class="button">Cerrar</a>
                </div>
              </div><!--Cierre Ventana Mensaje-->
              

   <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>

<script> /*abrir ventana curp*/
 
  const open_curp = document.getElementById('open_curp');
  const modal_container_name = document.getElementById('modal_container_name');
  var pos=window.pageYOffset || document.documentElement.scrollTop; /*ir arriba de la pagina*/
  open_curp.addEventListener('click', () => {
    window.scrollTo(0, pos * 1);/*ir arriba de la pagina*/
    modal_container_name.classList.add('show_name');  
  });
  
</script>


<script> /*abrir ventana mail*/

  const openmail= document.getElementById('open_mail');
  const modal_container_mail = document.getElementById('modal_container_mail');
  
  openmail.addEventListener('click', () => {
    window.scrollTo(0, pos * .8);/*ir arriba de la pagina*/
    modal_container_name.classList.remove('show_name');
    modal_container_mail.classList.add('show_mail');  
    
  });
  
 
</script>



<script> /*abrir ventana direccion*/
  const opendireccion = document.getElementById('open_direccion');
  const modal_container_direccion = document.getElementById('modal_container_direccion');
  
  opendireccion.addEventListener('click', () => {
    window.scrollTo(0, pos * .8);/*ir arriba de la pagina*/
    modal_container_mail.classList.remove('show_mail');
    modal_container_direccion.classList.add('show_direccion');  
    
  });
  
 
</script>

<script> /*abrir ventana familiar*/
  const openfamiliar = document.getElementById('open_familiar');
  const modal_container_familiar = document.getElementById('modal_container_familiar');
  
  openfamiliar.addEventListener('click', () => {
    window.scrollTo(0, pos * .8);/*ir arriba de la pagina*/
    modal_container_direccion.classList.remove('show_direccion');
    modal_container_familiar.classList.add('show_familiar');  
    
  });
  
 
</script>


<script> /*abrir ventana trabajo*/
  const opentrabajo = document.getElementById('open_trabajo');
  const modal_container_trabajo = document.getElementById('modal_container_trabajo');
  
  opentrabajo.addEventListener('click', () => {
    window.scrollTo(0, pos * .8);/*ir arriba de la pagina*/
    modal_container_name.classList.remove('show_direccion');
    modal_container_trabajo.classList.add('show_trabajo');  
    
  });
  
 
</script>

<script> /*abrir ventana ingresos*/
  const openingresos = document.getElementById('open_ingresos');
  const modal_container_ingresos = document.getElementById('modal_container_ingresos');
  
  openingresos.addEventListener('click', () => {
    window.scrollTo(0, pos * .8);/*ir arriba de la pagina*/
    modal_container_trabajo.classList.remove('show_trabajo');
    modal_container_ingresos.classList.add('show_ingresos');  
    
  });
  
 
</script>
<script>/*abrir ventana mensaje respuesta*/
    
const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');


open.addEventListener('click', () => {
   
modal_container.classList.add('show'); 

});


</script>
<script>
var nombre =document.getElementById('nombre');
  var apellido_mat =document.getElementById('apellido-paterno');
  var apellido_pat =document.getElementById('apellido-materno');
  var mail =document.getElementById('correo');
  var curp =document.getElementById('curp');
  var erroDiv= document.getElementById('error');
  var erroDiv2 = document.getElementById('error2');

  nombre.addEventListener('blur', validaCampos);
  apellido_mat.addEventListener('blur', validaCampos);
  apellido_pat.addEventListener('blur', validaCampos);
  mail.addEventListener('blur', validaCampos);
  mail.addEventListener('blur', validaMail);
  curp.addEventListener('blur', validaCampos);

    function validaCampos() {
      if(this.value==''){
          erroDiv.style.display='block';
          erroDiv.innerHTML="Los Campos Señalados son Obligatorios" 
          erroDiv.style.background='#ea2d2d';
          erroDiv2.style.display='block';
          erroDiv2.innerHTML="Los Campos Señalados son Obligatorios" 
          erroDiv2.style.background='#ea2d2d';
          this.style.background ='#ea2d2d';
          
      }
      else{
        erroDiv.style.display='none';
        this.style.background ='#f2f2f2';
        erroDiv2.style.display='none';
        this.style.background ='#f2f2f2';
        
      }
    } 
    function validaMail() {
      if (this.value.indexOf("@") > -1)  {
        erroDiv.style.display='none';
        this.style.background ='#f2f2f2';
       
      }else {
        erroDiv.style.display='block';
          erroDiv.innerHTML="cuenta de correo no es valida" 
          erroDiv.style.background='#ea2d2d';
          this.style.background ='#ea2d2d';
      }

    }
 
</script>
</html>
