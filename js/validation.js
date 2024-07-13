//Paso #1: eSCUCHAR O DETECTAR EL INGRESO DE DATOS
//EN EL NAVEGADOR
window.addEventListener('DOMContentLoaded', function(event){
    //PASO #2 : Creamos una constante que permita almacenar o enalazar lo que digitemos en cada INPUT O CAJA
    const nombres= document.getElementById('nombres');
    const dni= document.getElementById('dni');
    const direc= document.getElementById('direc');
    const residencia= document.getElementById('resid');
    const celuAp= document.getElementById('celuAp');
    const celuAl= document.getElementById('celuAl');
    const usuario= document.getElementById('nomUsu');
    const contrasena= document.getElementById('contrasena');

    //Paso #3: asignamos a cada constante su respectiva función.
    nombres.addEventListener('input', nameValidation);
    dni.addEventListener('input', dniValidation);
    direc.addEventListener('input', direcValidation);
    residencia.addEventListener('input', residValidation);
    celuAl.addEventListener('input', celuValidation);
    celuAp.addEventListener('input', celuValidation);
    usuario.addEventListener('input', usuarioValidation);
    contrasena.addEventListener('input', contrasenaValidation);
    //Paso #4: finalmente creamos cada una de las funciones

    function nameValidation(event){
        const i= event.data;
        if (!/^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$/.test(i)) {
            Swal.fire({
                icon: "error",
                title: "Oops... Hay un error",
                text: "Solo se aceptan letras, no números",
                footer: '<a href="#">¿Por que tengo este problema?</a>'
              });   
        }else{

        }
        
    }
    function dniValidation(event){
        const i= event.data;
        if (!/^[0-9]+$/.test(i)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">¿Por que tengo este problema?</a>'
              });   
        }else{

        }
        
    }
    function direcValidation(event){
        const i= event.data;
        if (!/^[a-zA-Z0-9\s\-\#\.]+$/.test(i)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">¿Por que tengo este problema?</a>'
              });   
        }else{

        }
        
    }
    function residValidation(event){
        
    }
    function usuarioValidation(event){
        const i= event.data;
        if (!/^[a-zA-Z0-9_-]+$/.test(i)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">¿Por que tengo este problema?</a>'
              });   
        }else{

        }
        
    }
    function celuValidation(event){
        const i= event.data;
        if (!/^[0-9]+$/.test(i)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">¿Por que tengo este problema?</a>'
              });   
        }else{

        }
        
    }
    function contrasenaValidation(event){
        const i= event.data;
        if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/.test(i)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">¿Por que tengo este problema?</a>'
              });   
        }else{

        }
    }

})
//const signUp= document.getElementById('signUp');