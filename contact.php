<?php 
  include_once "php/header.php";
?>
    <!-- <div class="container"> -->
      <!-- <div class="row"> -->
        <!-- <div class="col-sm-4"></div> -->
        <!-- <div class="col-sm-4"> -->
        <div class="cont_formulario_principal">
           <div class="panel panel-danger">
            <!-- <div class="panel panel-heading">
              REGISTRO DE USUARIO
            </div> -->
            <div class="cont_formulario_cont">
              <form action="" id="formulario">
                  <div class="formulario__group" id="group_nombre">
                      <label for="nombre" class="formulario_label">Nombre y Apellido</label>
                      <div class="formulario_group-input">
                          <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Ingrese nombre y apellido">
                          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                      </div>
                      <p class="formulario__input-error">
                          Este campo solo debe tener letras y espacios
                      </p>
                  </div>

                  <!-- Campo correo -->
                  <div class="formulario__group" id="group_correo">
                      <label for="correo" class="formulario_label">Correo Electronico</label>
                      <div class="formulario_group-input">
                          <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Digite Correo Electronico">
                          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                      </div>
                      <p class="formulario__input-error">
                          El correo solo debe contener letra, numeros, puntos, guiones y gruion bajo
                      </p>
                  </div>

                  <!-- Campo Telefono -->
                  <div class="formulario__group" id="group_telefono">
                      <label for="telefono" class="formulario_label">Telefono</label>
                      <div class="formulario_group-input">
                          <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="Digite Numero telefonico">
                          <i class="formulario__validacion-estado fas fa-times-circle"></i>
                      </div>
                      <p class="formulario__input-error">
                          El telefono solo puede contener numeros y el maximo son 10 numeros
                      </p>
                  </div>

                  <!-- Campo Descripcion -->
                  <div class="formulario__group" id="group_descripcion">
                      <label for="descripcion" class="formulario_label">Descripcion (Opcional)</label>
                      <div class="formulario_group-input">
                          <textarea name="descripcion" id="descripcion" class="txt_area formulario__input"></textarea>
                          <i class="txt_est_icon formulario__validacion-estado fas fa-times-circle"></i>
                      </div>
                      <p class="formulario__input-error">
                          La descripcion debe tener un maximo de 1000 caracteres
                      </p>
                  </div>

                  <!-- Nombre de servicio -->
                  <div class="formulario__group" id="group_nombre_servicio">
                    <label for="nombre_servicio" class="formulario_label">Tipo de servicio</label>
                    <div class="formulario_group-input">
                      <select class="formulario__input" id="nombre_servicio" name="nombre_servicio">
                        <option value="" >Seleccione Alguno de los servicios</option>
                        <option value="creacion paginas web" >Creacion de Paginas Web</option>
                        <option value="tienda online" >Tiendas online / Ecommerce</option>
                        <option value="app desktop" >Desarrollo de Aplicaciones de Escritorio</option>
                        <option value="app movil" >Desarrollo de Aplicaciones Móviles</option>
                        <option value="matenimiento/actualizacion" >Mantenimiento o Actualización de Contenido y/o Maquetación de tu sitio web</option>
                        <option value="qa software" >Calidad de Software</option>
                      </select>
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">
                        Seleccionar alguno de los campos
                    </p>
                  </div>

                  <!-- terminos y condiciones -->
                  <div class="formulario__group" id="grupo__terminos">
                      <label class="formulario__label">
                          <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                          Acepto los terminos y condiciones
                      </label>
                  </div>

                  <div class="formulario__mensaje" id="formulario__mensaje">
                      <p>
                          <i class="mensj_errorf_icono fas fa-exclamation-triangle"><b class="mensj_errorf">Error:</b>Por favor rellena el formulario correctamente.</i>
                      </p>
                  </div>


                <span class="btn btn-primary btn_registrar" id="registrarNuevo">Registrar</span>
              </form>
            </div>
          </div>
        </div>
         
        <!-- </div> -->
        <!-- <div class="col-sm-4"></div>
        <div class="col-sm-4"></div> -->
      <!-- </div> -->
    <!-- </div> -->

<?php 
  include_once "php/footer.php";
?>