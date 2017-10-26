
function enciende(campo){
    campo.setAttribute("class","enciende");
}
function apaga(campo) {
    campo.setAttribute("class","apaga");
}

var validarContacto = function (){
    
    
    var verificar = true;
    
    var nombre = document.contacto.nombre;
    if (nombre.value == ""){
        document.getElementById("aviso_nombre").innerHTML = "!ERROR";
        alert("El campo nombre no puede estar vacio");
        document.getElementById("resumen").innerHTML = "El campo nombre no puede estar vacio";
        //enciende(nombre);
        verificar = false;
        nombre.focus();
        return verificar;
    }
    else if(nombre.value.length < 3 || nombre.value.length > 20){
        document.getElementById("aviso_nombre").innerHTML = "!ERROR";
        alert("El campo nombre debe contener entre 3 y 20 caracteres");
        document.getElementById("resumen").innerHTML = "El campo nombre debe contener entre 3 y 20 caracteres";
        //enciende(nombre);
        verificar = false;
        nombre.focus();

        return verificar;
    }else if(!nombre.value.match(/^[a-z ñáéíóú]+$/i)){
        document.getElementById("aviso_nombre").innerHTML = "!ERROR";
        alert("El campo nombre solo puede contener letras a-z A-Z");
        document.getElementById("resumen").innerHTML = "El campo nombre solo puede contener letras a-z A-Z";
       // enciende(nombre);
        verificar = false;
        nombre.focus();

        return verificar;
    }else{
      //  apaga(nombre);
        document.getElementById("aviso_nombre").innerHTML = "*";
        document.getElementById("resumen").innerHTML = "";
        
    }
 
 
    
    var apellidos = document.contacto.apellidos;
 
    if (apellidos.value == ""){
        document.getElementById("aviso_apellidos").innerHTML = "!ERROR";
        alert("El campo apellidos no puede estar vacio");
        document.getElementById("resumen").innerHTML = "El campo apellidos no puede estar vacio";
        //enciende(apellidos);
        verificar = false;
        apellidos.focus();
        
        return verificar;
    } else if(apellidos.value.length < 6 || nombre.value.length > 40){
        document.getElementById("aviso_apellidos").innerHTML = "!ERROR";
        alert("El campo apellidos debe contener entre 6 y 40 caracteres");
        document.getElementById("resumen").innerHTML = "El campo apellidos debe contener entre 6 y 40 caracteres";
        //enciende(apellidos);
        verificar = false;
        apellidos.focus();

        return verificar;
    }else if(!apellidos.value.match(/^[a-z ñáéíóú]+$/i)){
        document.getElementById("aviso_apellidos").innerHTML = "!ERROR";
        alert("El campo apellidos solo puede contener letras a-z A-Z");
        document.getElementById("resumen").innerHTML = "El campo apellidos solo puede contener letras a-z A-Z";
        //enciende(apellidos);
        apellidos.focus();

        return verificar;
    }else{
       // apaga(apellidos);
        document.getElementById("aviso_apellidos").innerHTML = "*";
        document.getElementById("resumen").innerHTML = "";
        
    }
    
    var mail = document.contacto.mail;
        if (mail.value == ""){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo E-mail no puede estar vacio");
        document.getElementById("resumen").innerHTML = "El campo E-mail no puede estar vacio";
        //enciende(mail);
        verificar = false;
        mail.focus();
        return verificar;
    } else if(mail.value.length < 8 || nombre.value.length > 30){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo E-mail debe contener entre 8 y 30 caracteres");
        document.getElementById("resumen").innerHTML = "El campo E-mail debe contener entre 8 y 30 caracteres";
       // enciende(mail);
       verificar = false;
        mail.focus();

        return verificar;

    } else if(!mail.value.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo mail tiene que ser del tipo xxxxxx@xxx.xxx");
        document.getElementById("resumen").innerHTML = "El campo mail tiene que ser del tipo xxxxxx@xxx.xxx";
       // enciende(mail);
       verificar = false;
        mail.focus();

        return verificar;
    }
    else{
        //apaga(mail);
        document.getElementById("aviso_mail").innerHTML = "*";
        document.getElementById("resumen").innerHTML = "";
        
    }
    
    var telefono = document.contacto.telefono;
    
    if (telefono.value == ""){
        document.getElementById("aviso_telefono").innerHTML = "!ERROR";
        alert("El campo telefono no puede estar vacio");
        document.getElementById("resumen").innerHTML = "El campo telefono no puede estar vacio";
        //enciende(telefono);
        verificar = false;
        telefono.focus();
        return verificar;
    }
    else if(telefono.value.length != 9){
        document.getElementById("aviso_telefono").innerHTML = "!ERROR";
        alert("El campo telefono debe contener 9 digitos");
        document.getElementById("resumen").innerHTML = "El campo telefono debe contener 9 digitos";
       // enciende(telefono);
        telefono.focus();

        return verificar;
    }
    else if(!telefono.value.match(/^([0-9])*$/)){
        document.getElementById("aviso_telefono").innerHTML = "!ERROR";
        alert("El campo telefono solo puede contener digitos 0 - 9");
        document.getElementById("resumen").innerHTML = "El campo telefono solo puede contener digitos 0 - 9";
        //enciende(telefono);
        verificar = false;
        telefono.focus();

        return verificar;
    }else{
       // apaga(telefono);
        document.getElementById("aviso_telefono").innerHTML = "*";
        document.getElementById("resumen").innerHTML = "";
        
    }
    
    
    
    var mensaje = document.contacto.mensaje;
    
        if (mensaje.value ==""){
            document.getElementById("aviso_mensaje").innerHTML = "!ERROR";
            alert("El campo mensaje no puede estar vacio");
            document.getElementById("resumen").innerHTML = "El campo mensaje no puede estar vacio";
            enciende(mensaje);
            mensaje.focus();
            return verificar;
        } else if(mensaje.value.length < 6 || nombre.value.length > 400){
            document.getElementById("aviso_mensaje").innerHTML = "!ERROR";
            alert("El campo mensaje debe contener entre 6 y 400 caracteres");
            document.getElementById("resumen").innerHTML = "El campo mensaje debe contener entre 6 y 400 caracteres";
          //  enciende(mensaje);
            verificar = false;
            mensaje.focus();
    
            return verificar;
    
         }else{
           // apaga(mensaje);
            document.getElementById("aviso_mensaje").innerHTML = "*";

         }
         
         
         if(verificar == true){
            document.contacto.submit();
         }
    return verificar; 
    
}

var validarLogin = function (){
    
    

    
    var verificar = true;
    
    
    

    
    var mail = document.login.mail;
        if (mail.value == ""){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo E-mail no puede estar vacio");
        document.getElementById("resumen").innerHTML = "El campo E-mail no puede estar vacio";
        //enciende(mail);
        verificar = false;
        mail.focus();
        return verificar;
    } else if(mail.value.length < 8 || mail.value.length > 30){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo E-mail debe contener entre 8 y 30 caracteres");
        document.getElementById("resumen").innerHTML = "El campo E-mail debe contener entre 8 y 30 caracteres";
       // enciende(mail);
       verificar = false;
        mail.focus();

        return verificar;

    } else if(!mail.value.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo mail tiene que ser del tipo xxxxxx@xxx.xxx");
        document.getElementById("resumen").innerHTML = "El campo mail tiene que ser del tipo xxxxxx@xxx.xxx";
       // enciende(mail);
       verificar = false;
        mail.focus();

        return verificar;
    }
    else{
        //apaga(mail);
        document.getElementById("aviso_mail").innerHTML = "*";
        document.getElementById("resumen").innerHTML = "";
    
    

        
    }

    
    var password = document.login.password;
    if (password.value == ""){
        document.getElementById("aviso_pass").innerHTML = "!ERROR";
        alert("El campo pass no puede estar vacio");
        document.getElementById("resumen").innerHTML = "El campo Pass no puede estar vacio";
        //enciende(nombre);
        verificar = false;
        password.focus();
        return verificar;
    }
    else if(password.value.length < 3 || password.value.length > 20){
        document.getElementById("aviso_pass").innerHTML = "!ERROR";
        alert("El campo pass debe contener entre 3 y 20 caracteres");
        document.getElementById("resumen").innerHTML = "El campo pass debe contener entre 3 y 20 caracteres";
        //enciende(nombre);
        verificar = false;
        password.focus();

        return verificar;

    }else{
      //  apaga(nombre);
        document.getElementById("aviso_pass").innerHTML = "*";
        document.getElementById("resumen").innerHTML = "";
  

    }
 
        if(verificar == true){
            document.login.submit();
         }
 
    return verificar; 
    
}


 var validarRegistro = function (){
     
     var verificar = true;
    
     var mail = document.registro.mail;
        if (mail.value == ""){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo E-mail no puede estar vacio");
        document.getElementById("resumen2").innerHTML = "El campo E-mail no puede estar vacio";
        //enciende(mail);
        verificar = false;
        mail.focus();
        return verificar;
    } else if(mail.value.length < 8 || mail.value.length > 30){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo E-mail debe contener entre 8 y 30 caracteres");
        document.getElementById("resumen2").innerHTML = "El campo E-mail debe contener entre 8 y 30 caracteres";
       // enciende(mail);
       verificar = false;
        mail.focus();

        return verificar;

    } else if(!mail.value.match(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/)){
        document.getElementById("aviso_mail").innerHTML = "!ERROR";
        alert("El campo mail tiene que ser del tipo xxxxxx@xxx.xxx");
        document.getElementById("resumen2").innerHTML = "El campo mail tiene que ser del tipo xxxxxx@xxx.xxx";
       // enciende(mail);
       verificar = false;
        mail.focus();

        return verificar;
    }
    else{
        //apaga(mail);
        document.getElementById("aviso_mail").innerHTML = "*";
        document.getElementById("resumen2").innerHTML = "";
    
    

        
    }

        
    var telefono = document.registro.telefono;
    
    if (telefono.value == ""){
        document.getElementById("aviso_telefono").innerHTML = "!ERROR";
        alert("El campo telefono no puede estar vacio");
        document.getElementById("resumen2").innerHTML = "El campo telefono no puede estar vacio";
        //enciende(telefono);
        verificar = false;
        telefono.focus();
        return verificar;
    }
    else if(telefono.value.length != 9){
        document.getElementById("aviso_telefono").innerHTML = "!ERROR";
        alert("El campo telefono debe contener 9 digitos");
        document.getElementById("resumen2").innerHTML = "El campo telefono debe contener 9 digitos";
       // enciende(telefono);
        telefono.focus();

        return verificar;
    }
    else if(!telefono.value.match(/^([0-9])*$/)){
        document.getElementById("aviso_telefono").innerHTML = "!ERROR";
        alert("El campo telefono solo puede contener digitos 0 - 9");
        document.getElementById("resumen2").innerHTML = "El campo telefono solo puede contener digitos 0 - 9";
        //enciende(telefono);
        verificar = false;
        telefono.focus();

        return verificar;
    }else{
       // apaga(telefono);
        document.getElementById("aviso_telefono").innerHTML = "*";
        document.getElementById("resumen2").innerHTML = "";
        
    }    
    
         
    var password = document.registro.password;
    if (password.value == ""){
        document.getElementById("aviso_pass").innerHTML = "!ERROR";
        alert("El campo pass no puede estar vacio");
        document.getElementById("resumen2").innerHTML = "El campo Pass no puede estar vacio";
        //enciende(nombre);
        verificar = false;
        password.focus();
        return verificar;
    }
    else if(password.value.length < 3 || password.value.length > 20){
        document.getElementById("aviso_pass").innerHTML = "!ERROR";
        alert("El campo pass debe contener entre 3 y 20 caracteres");
        document.getElementById("resumen2").innerHTML = "El campo pass debe contener entre 3 y 20 caracteres";
        //enciende(nombre);
        verificar = false;
        password.focus();

        return verificar;

    }else{
      //  apaga(nombre);
        document.getElementById("aviso_pass").innerHTML = "*";
        document.getElementById("resumen2").innerHTML = "";
  

    }
    
    var password2 = document.registro.password2;
    if (password.value != password2.value){
        document.getElementById("aviso_pass2").innerHTML = "!ERROR";
        alert("Los Campos pass tienen que ser iguales");
        document.getElementById("resumen2").innerHTML = "Los Campos pass tienen que ser iguales";
        //enciende(nombre);
        verificar = false;
        password.focus();
        return verificar;
    
     }else{
      //  apaga(nombre);
        document.getElementById("aviso_pass2").innerHTML = "*";
        document.getElementById("resumen2").innerHTML = "";
  

    }
     
    var nombre = document.registro.nombre;
    if (nombre.value == ""){
        document.getElementById("aviso_nombre").innerHTML = "!ERROR";
        alert("El campo nombre no puede estar vacio");
        document.getElementById("resumen2").innerHTML = "El campo nombre no puede estar vacio";
        //enciende(nombre);
        verificar = false;
        nombre.focus();
        return verificar;
    }
    else if(nombre.value.length < 3 || nombre.value.length > 20){
        document.getElementById("aviso_nombre").innerHTML = "!ERROR";
        alert("El campo nombre debe contener entre 3 y 20 caracteres");
        document.getElementById("resumen2").innerHTML = "El campo nombre debe contener entre 3 y 20 caracteres";
        //enciende(nombre);
        verificar = false;
        nombre.focus();

        return verificar;
    }else if(!nombre.value.match(/^[a-z ñáéíóú]+$/i)){
        document.getElementById("aviso_nombre").innerHTML = "!ERROR";
        alert("El campo nombre solo puede contener letras a-z A-Z");
        document.getElementById("resumen2").innerHTML = "El campo nombre solo puede contener letras a-z A-Z";
       // enciende(nombre);
        verificar = false;
        nombre.focus();

        return verificar;
    }else{
      //  apaga(nombre);
        document.getElementById("aviso_nombre").innerHTML = "*";
        document.getElementById("resumen2").innerHTML = "";
        
    }
    
    var apellidos = document.registro.apellidos;
 
    if (apellidos.value == ""){
        document.getElementById("aviso_apellidos").innerHTML = "!ERROR";
        alert("El campo apellidos no puede estar vacio");
        document.getElementById("resumen2").innerHTML = "El campo apellidos no puede estar vacio";
        //enciende(apellidos);
        verificar = false;
        apellidos.focus();
        
        return verificar;
    } else if(apellidos.value.length < 6 || nombre.value.length > 40){
        document.getElementById("aviso_apellidos").innerHTML = "!ERROR";
        alert("El campo apellidos debe contener entre 6 y 40 caracteres");
        document.getElementById("resumen2").innerHTML = "El campo apellidos debe contener entre 6 y 40 caracteres";
        //enciende(apellidos);
        verificar = false;
        apellidos.focus();

        return verificar;
    }else if(!apellidos.value.match(/^[a-z ñáéíóú]+$/i)){
        document.getElementById("aviso_apellidos").innerHTML = "!ERROR";
        alert("El campo apellidos solo puede contener letras a-z A-Z");
        document.getElementById("resumen2").innerHTML = "El campo apellidos solo puede contener letras a-z A-Z";
        //enciende(apellidos);
        apellidos.focus();

        return verificar;
    }else{
       // apaga(apellidos);
        document.getElementById("aviso_apellidos").innerHTML = "*";
        document.getElementById("resumen2").innerHTML = "";
        
    }


    
     
     alert('Validando registro')
        
        if(verificar == true){
            document.registro.submit();
         }
 }



