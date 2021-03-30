<div class="cont_formulario_cont">
   <form method="POST" class="formulario" id="formulario">
        <!-- Campo Nombre usuario -->
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

        <!-- terminos y condiciones -->
        <div class="formulario__group" id="grupo__terminos">
            <label class="formulario__label">
                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                Acepto los terminos y condiciones
            </label>
        </div>

        <div class="formulario__mensaje" id="formulario__mensaje">
            <p>
                <i class="fas fa-exclamation-triangle"><b>Error:</b>Por favor rellena el formulario correctamente.</i>
            </p>
        </div>
        <div class="formulario__group formulario__grupo-btn-enviar">
            <button id="btn_guardar" name="registro" type="submit" class="formulario__btn">Enviar</button>
            <!-- <input name="registro" type="submit" class="formulario__btn"> -->
            
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">
                Formulario enviado exitosamente!
            </p>
        </div>
    </form> 
</div>    
<?php
  include('php/conexion/conexion.php');
?>