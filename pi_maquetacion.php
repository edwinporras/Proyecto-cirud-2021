  <?php 
    include_once "php/header.php";
    if (!isset($_COOKIE['accept-cookies'])){
       
    
      ?> 
      <style>
        .super_container{
          background-color: #161c29;
        }
        .desktop_info1{
          margin-top: 7% !important;
        }
      </style>
    <!-- <div class="cookie-banner">
      <div class="container-cookie">
        <p>Nosotros utilizamos cookies en este sitio. para utilizar este sitio web, nosotros asumimos su consentimiento <a href="/cookies" target="_blank">Leer mas...</a></p>
        <a href="?accept-cookies" class="button">Ok, Continuar</a>
      </div>
    </div> -->
    <?php 
      }
    ?>  
  <body>


  <div class="contenedor_pgweb mt-5">
   
   <div class="desktop_info1">
      <div class="container_desktop_info">
        <div class="txt_desktop_inferior">
          <img src="ima_act/movil/apple-android.png" width="100%" alt="">
        </div>
        <div class="txt_desktop_inferior modifi_desktopinfo">
          <p class="txt_desktop_info modifi_desktop2"> 
          Estar presentes en la red no simplemente significa tener una página web bonita, 
          sino que es importante mantenerla actualizada constantemente, esto ayuda a que los 
          clientes y visitadores de la web se vean atraídos por sus artículos y contenidos. 
          El contenido en web es demasiado importante ya que refleja el interior de la web, 
          de que trata y si ofrece productos, servicios o alguna cosa en general.


          La página web de una empresa es como la carta de presentación de la misma a los clientes, 
          si un cliente potencial visita una página web y la encuentra completamente desactualizada, 
          ya sea en diseño como en contenidos, probablemente se llevara una mala imagen de la empresa, 
          pensara que no es lo suficientemente seria y buscara otro proveedor.
          </p>
        </div>
        
      </div>
   </div>

   
    <div class="btn_cont_pgweb">
      <a href="contact" class="btn_principal_pgweb">Para mas informacion</a>
    </div>
</div>



  <?php 
    include_once "php/footer.php";
  ?>