(function (){
    $(document).ready(function () {

        const formulario = document.getElementById('formulario');
        const inputs = document.querySelectorAll('#formulario input, textarea');
    
        const expresiones = {
            usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
            nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
            password: /^.{4,12}$/, // 4 a 12 digitos.
            descripcion: /^.{1,1000}$/, // 1 a 1000 digitos.
            correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
            telefono: /^\d{7,14}$/ // 7 a 14 numeros.
        }
    
        const campos = {
            usuario: false,
            nombre: false,
            password: false,
            correo: false,
            telefono: false,
            descripcion: false
        }
    
        const validarFormulario = (e) => {
            switch (e.target.name) {
    
                case "nombre":
                    validarCampo(expresiones.nombre, e.target, 'nombre');
                break;
                
                case "correo":
                    validarCampo(expresiones.correo, e.target, 'correo');
                break;
                case "telefono":
                    validarCampo(expresiones.telefono, e.target, 'telefono');
                break;
                case "descripcion":
                    validarCampo(expresiones.descripcion, e.target, 'descripcion'); 
                break;
                default:
                    break;
            }
        }
    
        const validarCampo = (expresion, input, campo) => {
            if(expresion.test(input.value)){
                document.getElementById(`group_${campo}`).classList.remove('formulario__group-incorrecto');
                document.getElementById(`group_${campo}`).classList.add('formulario__group-correcto');
                document.querySelector(`#group_${campo} i`).classList.add('fa-check-circle');
                document.querySelector(`#group_${campo} i`).classList.remove('fa-times-circle');
                document.querySelector(`#group_${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
                campos[campo] = true;
            } else {
                document.getElementById(`group_${campo}`).classList.add('formulario__group-incorrecto');
                document.getElementById(`group_${campo}`).classList.remove('formulario__group-correcto');
                document.querySelector(`#group_${campo} i`).classList.add('fa-times-circle');
                document.querySelector(`#group_${campo} i`).classList.remove('fa-check-circle');
                document.querySelector(`#group_${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
                campos[campo] = false;
            }
        }
    
    
        inputs.forEach((input) => {
            input.addEventListener('keyup', validarFormulario);
            input.addEventListener('blur', validarFormulario);
        });
    
        
    
        $('#btn_guardar').click(function(){
            var datos = $('#formulario').serialize();
    
            // alert(datos);
            // return false;
            // DETENER
            $.ajax({
                type:"POST",
                url:"php/conexion/conexion.php",
                data:datos,
                success: function (result) {
                    // document.write(datos);
                    if (result==0) {
    
                        formulario.addEventListener('submit', (e) => {
                            e.preventDefault();
                    
                            
                    
                            const terminos = document.getElementById('terminos');
                            if(campos.nombre && campos.correo && campos.telefono && terminos.checked ){
                                formulario.reset();
                    
                                document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
                                setTimeout(() => {
                    
                                    
                    
                                    document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
                                    // document.getElementById(`formulario__mensaje`).classList.remove('formulario__mensaje');
                                    // document.getElementById(`formulario__mensaje`).classList.add('testprueba');
                                    
                                    // document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
                                }, 5000);
                    
                                document.querySelectorAll('.formulario__group-correcto').forEach((icono) => {
                                    icono.classList.remove('formulario__group-correcto');
                                });
                    
                                
                    
                    
                            } else {
                                document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
                            }
                        });
    
                        // alert("Agregado con exito");
                    }else{
                        alert("No se pudo agregar");
                    }
                }
            });
            
        });
    });
    
})();



// FUNCIONAL


$(document).ready(function () {



    $('#registrarNuevo').click(function(){
        if ($('#nombre').val()=="") {
            alertify.alert("Debes agregar el nombre");
            return false;
        }else if ($('#correo').val()=="") {
            alertify.alert("Debes agregar el correo");
            return false;
        }else if ($('#telefono').val()=="") {
            alertify.alert("Debes agregar el telefono");
            return false;
        }else if ($('#descripcion').val()=="") {
            alertify.alert("Debes agregar el descripcion");
            return false;
        }
        // else if ($('#terminos').val()=="") {
        //     alertify.alert("Debes agregar el terminos");
        //     return false;
        // }  
        cadena = "nombre=" + $('#nombre').val() +
                "&correo=" + $('#correo').val() +
                "&telefono=" + $('#telefono').val() +
                "&descripcion=" + $('#descripcion').val();
        $.ajax({
            type:"POST",
            url:"php/conexion/conexion.php",
            data:cadena,
            success:function (r) {
                if (r==1) {
                    $('#formulario')[0].reset();
                    alertify.success("Agregado con exito");
                }else{
                    alertify.error("Fallo al agregar");
                }
            }
        });
    });
});