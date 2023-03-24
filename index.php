<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  session_start();
  if(isset($_SESSION['usuario'])){
    ?>
  <script>window.location = "Vista/home.php";</script>  
 <?php   
  }else{
?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vista/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="Vista/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vista/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Fastime</b>POS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicie Sesion para comenzar</p>

      <form action="Vistas/home.php" id="frmlogin">
        <!--input Email-->
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Usuario" id="inputEmail" name="inputEmail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!--input Contraseña-->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" id="inputPassword" name="inputPassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <!--Recuerdame-->
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recuerdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <!--Boton-->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" id="btningresar">Iniciar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="Vista/pages/examples/forgot-password.html">Olvide mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrarse</a>
      </p>
      <p class="mb-2" id="ocultar">
        Usuario y/o Contraseña incorrecta 
      </p>
      <p class="mb-2" id="ocultar2">
        Complete los campos 
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="Vista/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script>
$(ocultar2).hide();
$(ocultar).hide();
$(document).ready(function(){
    $('#btningresar').click(function(){
        datos = $('#frmlogin').serialize();
        var usu = $('#inputEmail').val();
        var cla = $('#inputPassword').val();
        
        if(usu.length < 1 || cla.length < 1)
            {
              $(ocultar2).show();
            }
        else
        {
        $.ajax(
            {
            type:"POST",
            data:datos,
            url:"Controlador/Objetos/validateUser.php", 
            success:function(r)
            {
                if(r==1)
                    {
                      
                        window.location = "Vista/home.php";
                    }
                else if(r==0){
                    $(ocultar).show();  
                    }
                else
                    {
                        //alertify.error("Error al ingresar los datos");
                        alert(r);
                    }
            }
        });                
        }

    });
});

</script>

<?php
  }
?>