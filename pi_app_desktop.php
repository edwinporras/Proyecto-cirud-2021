<?php 
    include_once "php/header.php";
    if (!isset($_COOKIE['accept-cookies'])){
       
    
      ?> 
    <!-- <div class="cookie-banner">
      <div class="container-cookie">
        <p>Nosotros utilizamos cookies en este sitio. para utilizar este sitio web, nosotros asumimos su consentimiento <a href="/cookies" target="_blank">Leer mas...</a></p>
        <a href="?accept-cookies" class="button">Ok, Continuar</a>
      </div>
    </div> -->
    <style>
          .super_container{
            background-color: #161c29;
          }
      </style>
    <?php 
      }
    ?>  
  <body>

<div class="contenedor_pdesktop">
  <div class="contenedor_pdesktop_capa">
      <div class="contenedor_pdesktop_int">
        <p class="desktop_parr">
        Para poder gestionar y/o planificar las actividades, recursos y procesos de tu empresa por 
        que no realizarlo mediante una aplicación propia dentro de cada ordenador, en la web se 
        podrá encontrar aplicaciones similares que se puedan adoptar a lo que buscas pero no todas 
        estarán conformes al 100% de lo que tu estiras buscando, nosotros crearemos tu aplicación 
        de acuerdo a tus necesidades y desde 0 ya que una aplicación de escritorio es mas robusto 
        y rápidas.
        </p>
        <p class="desktop_parr">
        Las aplicaciones que desarrollamos se pueden emplear en red local (LAN). Son compatibles 
        con el sistema operativo Windows donde la aplicación permite conectar entre distintas 
        maquinas que posean el mismo sistema operativo sin necesidad de conectarse a internet. 
        Caracterizándose por la forma agradable que el usuario lo puede utilizar.
      </p>
      </div>
      <div class="contenedor_pdesktop_int">
      <img src="ima_act/desktop/imagendos_desktop.jpeg" alt="" width="100%">
      </div>
      <div class="contenedor_pdesktop_int">
        
      </div>
  </div>
</div>



<div class="contenedor_pgweb mt-5">
   
   <div class="desktop_info1">
      <p class="txt_desktop_info">
        Estas aplicaciones pueden se pueden trabajar en red local LAN. Adicionalmente son fácil de
        portar entre distintas versiones recientes de Windows y entre distintas máquinas que tengan
        Windows. Además pueden instalarse en una máquina y trabajar de manera aislada, es decir, 
        sin conectarse a una red.
      </p>
      <div class="container_desktop_info">
        <div class="txt_desktop_inferior">
          <img src="ima_act/desktop/imagen_desktop.png" width="100%" alt="">
        </div>
        <div class="txt_desktop_inferior modifi_desktopinfo">
          <p class="txt_desktop_info modifi_desktop2"> 
          Desarrollamos y soportamos aplicaciones de escritorio principalmente para el sistema 
          operativo Windows. Por lo general desarrollamos este tipo de software con la tecnología 
          de .NET Windowsforms. Estas interfaces son ricas en controles, intuitivas y amigables 
          para los usuarios de Windows
          </p>
        </div>
        
      </div>
      <p class="txt_desktop_info modifi_desktop">
          Dentro de los tipos de proyectos que se pueden desarrollar con .NET, existen las soluciones 
          en Windows Forms. En nuestro caso tenemos la capacidad de desarrollar rápidamente 
          <b> aplicaciones de escritorio</b> con ambiente Windows que trabaja por ventanas simultáneas de 
          la manera en que lo hace típicamente una aplicación para Windows. <br>

          Estas aplicaciones se caracterizan por su forma agradable de trabajar y la familiaridad 
          que el usuario que utiliza Windows adquiere rápidamente con ellas.
        </p>
      <p class="txt_desktop_info modifi_desktop">
          Algunas aplicaciones de escritorio hacen parte de un sistema <b> cliente-servidor.</b> 
          Estas aplicaciones se instalan en la máquina cliente pero dependen de una 
          aplicación central instalada en el servidor (un equipo que se ha designado 
          para este rol). Estas soluciones software permiten proporcionar un nivel alto 
          de seguridad y la implementación en un gran número de equipos.
        </p>
   </div>

    <div class="btn_cont_pgweb">
      <a href="contact" class="btn_principal_pgweb">Para mas informacion</a>
    </div>
</div>



  <?php 
    include_once "php/footer.php";
  ?>