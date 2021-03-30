<?php 
    include_once "php/header.php";
    if (!isset($_COOKIE['accept-cookies'])){
    
    
      ?> 
      <style>
          .super_container{
            background-color: #161c29;
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

<div class="title_main_pgweb">
    Tipos de servicios para paginas Web
</div>
<div class="contenedor_pgweb">
    <!-- <input class="ocul_radio" type="radio" name="filtro" id="pymes"> -->
    <!-- <label class="lbl_radio lbl_dif" for="todo">Seleccione tipo de servicio</label> -->
    <input class="ocul_radio" type="radio" name="filtro" id="micro">
    <label class="lbl_radio" for="micro">micro</label>
    <input class="ocul_radio" type="radio" name="filtro" id="pymes" checked> 
    <label class="lbl_radio" for="pymes">pymes</label>
    <input class="ocul_radio" type="radio" name="filtro" id="corpor">
    <label class="lbl_radio" for="corpor">corpor</label>

    <div id="imagenes">
        <div class="micro">
            <div class="micro_infe alfa">
                <h3 class="tit_pgweb">Paginas web para Microempresas</h3>
            </div>
            <div class="micro_infe beta">
                <p class="txt_pdweb"> 
                Es un paquete que está dirigido a pequeñas y medianas empresas que 
                requieren páginas web para ofrecer información acerca de su empresa. 
                Ideal para Microempresas que quieran mostrar información, 
                sus productos o servicios, noticias sobre la compañía o blog de novedades, 
                datos de contacto y ubicación, entre otros, por medio de herramientas y 
                aplicaciones profesionales de comunicación y multimedia 100% 
                autoadministrables.

                </p>
            </div>
        </div>
        <div class="pymes">
            <div class="micro_infe alfa">
                <h3 class="tit_pgweb">Paginas web Pymes</h3>
            </div>
            <div class="micro_infe beta">
                <p class="txt_pdweb"> 
                Este paquete está dirigido a empresas de servicios que necesitan
                páginas web para pymes con servicios en línea para sus clientes, 
                colaboradores y proveedores. Los visitantes podrán ingresar con un usuario 
                y contraseña para hacer consultas privadas en el sitio web.

                </p>
            </div>
        </div>
        <div class="corpor">
            <div class="micro_infe alfa">
                <h3 class="tit_pgweb">Paginas web Corporativos</h3>
            </div>
            <div class="micro_infe beta">
                <p class="txt_pdweb"> 
                Este paquete de páginas web corporativas está dirigido a empresas que 
                requieren un sitio web con información acerca de su compañía y además 
                necesitan herramientas de gestión e interacción con clientes, colaboradores, 
                proveedores y visitantes, tales como: administrador de documentos para permitir 
                la descarga de archivos desde el sitio, intranet para integrar todas las áreas 
                de la compañía y boletín de noticias para estar en comunicación con sus 
                suscriptores, entre otras herramientas 100% autoadministrables.

                </p>
            </div>
        </div>

        <!-- <div class="todo">
            <div class="micro_infe alfa">
                <h3 class="tit_pgweb">Servicios Disponibles para Paginas Web</h3>
            </div>
            <div class="micro_infe editor_caja">
                <div class="edt_caja_inf">
                    <a class="cajas_pgweb" href="#">
                        <div class="cajas_esc_pgweb"><i class="icono_mano far fa-hand-point-right"><span class="txt_span_pgweb">aca</span> </i></div>
                    </a>
                </div>
                <div class="edt_caja_inf">
                    <a class="cajas_pgweb" href="#">
                        <div class="cajas_esc_pgweb"><i class="icono_mano far fa-hand-point-right"><span class="txt_span_pgweb">aca</span> </i></div>
                    </a>
                </div>
                <div class="edt_caja_inf">
                    <a class="cajas_pgweb" href="#">
                        <div class="cajas_esc_pgweb"><i class="icono_mano far fa-hand-point-right"><span class="txt_span_pgweb">aca</span> </i></div>
                    </a>
                </div>
            </div>
        </div> -->
    </div>
    <div class="btn_cont_pgweb">
      <a href="contact" class="btn_principal_pgweb">Para mas informacion</a>
    </div>
</div>



  <?php 
    include_once "php/footer.php";
  ?>