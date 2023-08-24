

const nombre = document.getElementById("name");
const telefono =document.getElementById("telephone");
const correo = document.getElementById("email");
const contrasenia =document.getElementById("password");
const contrasenia2= document.getElementById("repeatPassword");
const form =document.getElementById("form");
const listInput =document.querySelectorAll(".field");

form.addEventListener("submit", (e) =>{
    e.preventDefault();
    validateForm();
});

function validateName(){
    if (nombre.value.length < 1 || nombre.value.trim() == ""){
        displayErrorMessage("Nombre no válido");
        return false;
    }
    return true;
}

function validateTelephone(){
    if (telefono.value.length != 9 || telefono.value.trim() == "" || isNaN(telefono.value)){
        console.error("Teléfono no válido");
    }
}

function validateEmail(){
    if (correo.value.length < 1 || correo.value.trim() == ""){
        console.error("Ingrese un correo válido");
    }
}

function validatePassword(){
    if (contrasenia.value.length < 1 || contrasenia.value.trim() == ""){
        console.error("la contraseña no es válida");
    }
}

function validateRepeatPassword(){
    if (contrasenia2.value.length != contrasenia.value){
        console.error("la contraseña no coincide");
    }
}

function validateForm(){
    validateName();
    validateTelephone();
    validateEmail();
    validatePassword();
    validateRepeatPassword();
}
   



