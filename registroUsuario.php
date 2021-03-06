<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleFront.css">
    <!--script type="text/javascript">
    function validaCampos(){
      var nombre = document.form01.nombre.value;
      var apellido = document.form01.apellidos.value;
      var correo = document.form01.correo.value;
      var contraseña = document.form01.contraseña.value;
      if(nombre=='' || apellido=='' || correo =='' || contraseña == ''){
        $('#Mensaje').html('Faltan campos por llenar');
        setTimeout("$('#Mensaje').html('');",5000);
      }
      else{
         document.form01.method = 'post';
         document.form01.action = 'usuarios_insertion.php';
         document.form01.submit();
      }
    }
    function validaCorreo(correo){
      $.ajax({
        url       : 'funciones/validaCorreo.php',
        type      : 'post',
        dataType  : 'text',
        data      : 'correo='+correo,
        success    : function(res) {
          if (res == 1){
            $('#validaCorreoDiv').html('El correo '+correo+ (' ya existe'));
            $('input[name="correo"]').val('');
            setTimeout("$('#validaCorreoDiv').html('');",5000);
          } else{
            $('#validaCorreoDiv').html('El correo '+correo+ (' esta disponible'));
            setTimeout("$('#validaCorreoDiv').html('');",5000);
          }
        } ,error: function(){
            $('#validaCorreoDiv').html('Archivo no encontrado...');
            setTimeout("$('#validaCorreoDiv').html('');",5000);
        }
      });
    }
    </script-->
    <style media="screen">
    body{
      background-color: #EEEEEE;
    }
    #validaCorreoDiv{
      display: inline-block;

    }

  input:focus{
    border-bottom: 5px solid $form-shadow;
  }
  input{
    margin: 12px;
    padding: 10px;
    width: 640px;
    font-size: 18px;
    border: none;
    margin-bottom: 5px;
  }
  input[type="submit"]{
    margin-bottom: 15px;
    margin-top: 5px;
  }

  .form{
    display: inline-block;
    width: 700px;
    height: 250px;
    float: left;
    text-align: left;
    padding-left: 20px;
    background-color: #EEEEEE;
  }
  .wrapper{
    position: relative;
    text-align: center;
    margin: auto;
    width: 60%;
    padding: 10px;
    background-color: #EEEEEE;
    margin-top: 40px;
  }
  #Mensaje{
    position: absolute;
    margin-top: 320px;
    margin-left: 220px;
    color: red;
    background-color:#EEEEEE;
    font-size: 20px;
   }
   #return{
     position: absolute;
     margin-top: 180px;
     margin-left: 700px;
   }
   body{
     background-image: url("images/cool-background.png");
   }
   h1{
     text-align: left;
   }
   .footer-basic{
     margin-top: 450px;
   }

  </style>
  </head>
  <body>
    <!--?php  session_start();
    require "navbar.php";
    ?-->
    <div class="wrapper">
      <div class="form">
      <h1>Alta de nuevos usuarios</h1>
      <form class="" name="form01"  method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Ingresa tu nombre"><br>
        <input type="text" name="apellidos" placeholder="Ingresa tu apellido"><br>
        <input  type="text" name="correo" placeholder="Ingresa tu correo" onblur="validaCorreo(value)"><div id="validaCorreoDiv"></div><br>
         <!-- onfocus onblur  onfocus="muestra('hola');"-->
        <input type="password" name="contraseña" placeholder="Ingresa tu contraseña"><br><br>
        <input type="submit" onClick="validaCampos();return false;" value="Enviar">
      </form>
      </div>
      <div id="Mensaje"></div>
      <div id="return" class="buttonContainer">
        <button class="button1"><a href="index.php">Regresar</a></button>
      </div>
    </div>
    <!--?php require 'footer.php'; ?-->
  </body>
</html>
