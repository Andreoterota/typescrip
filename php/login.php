const mysql = require('mysql')

const conention =mysql.createConnection({
     host: 'localhost',
     user: 'root',
     password: 'day123',
     database: 'Senderos',
})

conention.connect( (err) =>{
    if(err) throw err
    console.log('la conexion funciona');
})



const nombre = document.getElementById(name);
const telefono = document.getElementById(telephone);
const correo  =  document.getElementById(email);
const password = document.getElementById(contraseña);

const form = document.getElementById("form");
const listaInput = document.querySelectorAll(".input-box")

form.addEventListener("submit", e => { 
    e.preventDefalut()
    let warnings=""
    let guardar= false
     if (nombre.valvue.leght < 1  || nombre.valvue.trin()==""){
     warnings += 'Nombre necesario para el registro <br>'
     guardar= true
    }

    if (telefono.valvue.leght < 1 || cedula.valvue.trin()==""){
        warnings += 'teléfono obligatorio para el registro <br>'
        guardar= true
    }

    if (correo.valvue.leght < 1 || correo.valvue.trin()==""){
        warnings += 'correoo obligatoria para el registro <br>'
        guardar= true
    }
   if (contraseña.valvue.leght){

   }

    
    if(guardar){
        listaInput.innerHTML = warningsnpt
    }
    
});









