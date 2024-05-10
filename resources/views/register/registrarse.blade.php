<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrarse e Iniciar Sesión</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="login.css">
    </head>
    
    <body>
    <nav>
        <a href="/inicio">Regresar</a>
    </nav>

        <div class="container">
          <div class="forms-container">
            <div class="signin-signup">

            <form action="{{ route('entrar.store') }}" method="POST" class="sign-in-form">
            @csrf
                <h2 class="title text-left text-black">Iniciar <span style="color: #F28705">sesión</span></h2>
                
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input type="text" id="user" placeholder="Usuario" />
              </div>

                <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" id="password" placeholder="Contraseña" />
                </div>
                <input type="submit" value="Entrar" class="btn solid" style="width: 150; border: none; color: white; width: 196px; height: 57px"/>

                <p class="social-text">O inicie sesión en plataformas sociales</p>
                <div class="d-flex justify-content-center align-items-center">
                  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-google"></i></a>
                </div>
              </form>

            
              <form action="{{ route('entrar.store') }}" method="POST" class="sign-up-form" id="registros">
              @csrf
                <h2 class="title text-left text-black">Completa el <span style="color: #F28705">formulario</span></h2>
                
                <div class="input-field">
                  <i class="fas fa-user"></i>
                  <input list="opciones" type="text" placeholder="Cargo" />
                  <datalist id="opciones">
                      <option value="Conductor">
                      <option value="Usuario">
                  </datalist>
              </div>

              <div class="input-field">
                  <i class="fas fa-id-card"></i>
                  <input type="name" placeholder="Nombre Completo" />
                </div>

                <div class="input-field">
                  <i class="fas fa-phone"></i>
                  <input type="tel" placeholder="Teléfono"/>
                </div>

                <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="email" placeholder="Correo" />
                </div>

                <input type="submit" value="Enviar" class="btn solid" style="width: 150; border: none; color: white; width: 196px; height: 57px"/>
                <p class="social-text">O inicie sesión en plataformas sociales</p>
                <div class="d-flex justify-content-center align-items-center">
                  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-google"></i></a>
                </div>
              </form>
            </div>
          </div>
      
          <div class="panels-container">
            <div class="panel left-panel">
              <div class="content">
                <h3>¿Nuevo por aquí?</h3>
                <p>
                  No te preocupes, puedes registrarte dando click para
                  accceder a nuestros servicios.
                </p>
                <button class="btn transparent" id="sign-up-btn">
                  Registrar
                </button>
              </div>
              <img src="{{ asset('img/34915950_8249793.svg') }}" class="image" alt="" />
            </div>
            
            <div class="panel right-panel">
              <div class="content">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>
                  Inicia sesión e ingresa nuevamente :)
                </p>
                <button class="btn transparent" id="sign-in-btn">
                  Iniciar Sesión
                </button>
              </div>
              <img src="{{ asset('/img/login.svg') }}" class="image" alt="" />
            </div>
          </div>
        </div>
      
        <script src="app.js"></script>
      </body>

<!-- Masthead-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="script.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
