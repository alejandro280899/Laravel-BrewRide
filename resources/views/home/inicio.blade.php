<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Brew Ride</title>
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
        <link rel="stylesheet" href="styles.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/inicio">
        <img src="{{ asset('img/logo_texto-removebg-preview.png') }}" alt="Logo de tu página" width="150px" height="100px">
        </a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#inicio">Inicio</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Servicios</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#comentarios">Comentarios</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contactos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/registrarse">Registrarse</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<header class="masthead bg-primary text-white text-center" style="background-image: url('{{ asset('img/fondo.png') }}'); background-size: cover; background-position: center center; margin-top: 100px; overflow-x: hidden">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <!-- Masthead Heading-->
        <h1 class="masthead-heading mb-0" style="color: #D3D3D3; text-align:left; font-size: 45px;">Viaja rápido, seguro y eficaz</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light"></div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0" style="color: #EBEBEB">asegurando su bienestar durante el trayecto</p>
        <!-- Portfolio Item Caption -->
        <div class="portfolio-item-caption d-flex align-items-left justify-content-left h-100 w-100">
                <div class="portfolio-item-caption-content text-left text-white"></div>
                <button type="button" class="btn btn-custom" style="color:white; width:100px; height: 59px" onclick="window.open('/registrarse')">Ingresar</button>
              </div>
        </div>
    </div>
</header>

<!--inicio-->
<section class="page-section bg-primary text-white mb-0" id="inicio">
    <div class="container">
        <!-- inicio Section Heading-->
        <h2 class="page-section-heading text-left text-black">Lo que nos <span style="color: #F28705">mueve</span></h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- inicio Section Content-->
        <div class="row">
            <div class="col-lg-8 ms-autos">
                <p class="lead" style="color:black">
                        En Brew Ride, nos dedicamos a conectar a usuarios particulares y empresas con servicios
                        de transporte que se adaptan a sus necesidades. Nuestro principal objetivo
                        es contribuir a la reducción de la tasa de accidentes en las ciudades y para lograrlo,
                        hemos desarrollado un software impulsado por sólidos principios éticos. Más que simplemente
                        ofrecer movilidad, nos esforzamos por promover la toma de decisiones responsables al volante.
                        Únete a nosotros en nuestro compromiso por un viaje más seguro y consciente.
                </p>
            </div>
            <!-- Cambiar este div por la imagen -->
            <div class="col-lg-4 me-autos">
                <img src="{{ asset('img/taxi.jpg') }}"; alt="Interior del taxi" class="img-fluid" style="max-width: 100vh; height: 395px;">
            </div>
        </div>
        <!-- inicio Section Button-->
        <div class="portfolio-item-caption d-flex align-items-left justify-content-left">
                <div class="portfolio-item-caption-content text-left text-white"></div>
                <button type="button" class="btn btn-custom" style="margin-top:-60px; color:white" onclick="window.open('/nosotros')">Leer más</button>
            </div>
        </div>
    </div>
</section>

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="inicio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-black" style="text-align: center">Discotecas <span style="color: #F28705">visitadas</span></h2>
                <div class="row">
            <div class="page-section-heading text-center text-black">
                <p class="lead" style="color:black">
                ¡Aventúrate en una experiencia emocionante
                    y siempre renovada! Cada dos semanas
                    actualizaremos las discotecas de esta página
                </p>
            </div>

                <!-- Icon Divider-->
                <div class="divider-custom"></div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item mx-auto">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/level.jpeg') }}" alt="Entrada de level" style="width:348px; height: 251.33px;background-color: transparent"/>
                        </div>
                    </div>

                    <!-- Portfolio Item 2-->

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/fotoLevel.jpg') }}" alt="Interior de level" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>

                    <!-- Portfolio Item 3-->

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                    </div>
                        <img class="img-fluid" src="{{ asset('img/tono.png') }}" alt="Tono" style="width:348px; height: 251.33px"/>
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white" style="text-align:center">
                    Level Club <br>
                    Cra. 9 #60 Norte-151
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 4-->
                    
            <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                    </div>
                        <img class="img-fluid" src="{{ asset('img/tono.png') }}" alt="Tono" style="width:348px; height: 251.33px"/>
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white" style="text-align:center">
                    Land Disco <br>
                    Av. Panamericana #14 Norte-2 a 14 Norte-82
                    </div>
                </div>
            </div>

            <!-- Portfolio Item 5-->
            
            <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                        </div>
                            <img class="img-fluid" src="{{ asset('img/fotoLand.jpg') }}" alt="Interior de land" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>

            <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/land.jpg') }}" alt="Entrada de land" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 7-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal7">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/sandunga.jpg') }}" alt="Entrada de sandunga" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 8-->

                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal8">
                            <div class="portfolio-item-captions d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/fotoSandunga.jpg') }}" alt="Interior de sandunga" style="width:348px; height: 251.33px"/>
                        </div>
                    </div>

                    <!-- Portfolio Item 9-->

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto position-relative" data-bs-toggle="modal" data-bs-target="#portfolioModal9">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x" style="width:42px; height: 48px"></i></div>
                    </div>
                        <img class="img-fluid" src="{{ asset('img/tono.png') }}" alt="Tono" style="width:348px; height: 251.33px"/>
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white" style="text-align:center">
                    Sandunga<br>
                    Av. Panamericana #14 Norte-2 a 14 Norte-82
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section-->
        <section class="pag-section portfolio" id="about">
            <div class="container" style="padding-left: 15px; padding-right: 15px;">
                <!-- About Section Heading-->
                <h2 class="pag-section-heading text-center text-black" style="text-align: center">Nuestros <span style="color: #F28705">servicios</span></h2>
                <!-- Icon Divider-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    <!-- Portfolio Item 1-->

                    <div class="col-md-6 col-lg-4 mb-5 margen" style="background-color: #eae7e7; border: 8px solid #ffffff">
                        <div class="page-section-heading text-center text-black">
                            <img class="img-fluid" src="{{ asset('img/copas-de-vino.png') }}" alt="Copas de vino" style="width:100px; height: 100px; display: block; margin: 30px auto;" />
                        <p class="lead" style="color:black;text-align:center">
                            <span style="font-size:1.50rem; font-weight:bold">Conductor</span></p>
                        <p class="lead" style="color:black; text-align:center;">
                            Transporte seguro para tus noches de celebración
                        </p>
                    </div>
                </div>

                    <!-- Portfolio Item 2-->

                    <div class="col-md-6 col-lg-4 mb-5" style="background-color: #eae7e7; border: 8px solid #ffffff">
                        <div class="page-section-heading text-center text-black">
                            <img class="img-fluid" src="{{ asset('img/casa.png') }}" alt="Casa" style="width:100px; height: 100px; display: block; margin: 30px auto;" />
                        <p class="lead" style="color:black;text-align:center">
                            <span style="font-size:1.50rem; font-weight:bold">Domicilio</span></p>
                        <p class="lead" style="color:black; text-align:center;">
                            Envía paquetes desde la comodidad de tu hogar
                        </p>
                    </div>
                </div>

                    <!-- Portfolio Item 3-->

                    <div class="col-md-6 col-lg-4 mb-5" style="background-color: #eae7e7; border: 8px solid #ffffff">
                        <div class="page-section-heading text-center text-black">
                            <img class="img-fluid" src="{{ asset('img/llamada emergencia.png') }}" alt="Llamada de emergencia" style="width:100px; height: 100px; display: block; margin: 30px auto;" />
                        <p class="lead" style="color:black;text-align:center">
                            <span style="font-size:1.50rem; font-weight:bold">Emergencias</span></p>
                        <p class="lead" style="color:black; text-align:center;">
                            Recibe atención médica en el momento preciso que la necesitas
                        </p>
                    </div>
                </div>
        </section>
        
        <!-- testimon Section-->
        
        <section class="pag-section portfolio" id="servicio">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="pag-section-heading text-center text-black" style="text-align: center">Si vas a beber. <span style="color: #F28705"> Haz del regreso a casa un recuerdo seguro</span></h2>
                <!-- Icon Divider-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    <!-- Portfolio Item 1-->

                            <!-- inicio Section Content-->
        <div class="row">
        <div class="col-lg-8 ms-autos">
            <p class="lead" style="color:black;text-align:left">
                <img src="{{ asset('img/manos.png') }}" alt="Icono de manos" id="manos" style="height: 60px; margin-right: 10px; background-color: #262626; border-radius:5px">
                <span style="font-size:1.90rem; font-weight:bold; color:black">Compromiso</span>
            </p>

            <p class="lead" style="color:black; text-align:left;">
                No te preocupes por tu bienestar, nosotros te cuidamos
            </p>

            <br>

            <p class="lead" style="color:black;text-align:left">
                <img src="{{ asset('img/taxi.png') }}" alt="Icono de taxi" id="taxi" style="height: 70px; margin-right: 10px; background-color: #262626; border-radius:5px">
                <span style="font-size:1.90rem; font-weight:bold">Servicios 24 horas</span>
            </p>
            
            <p class="lead" style="color:black; text-align:left;">
                El servicio estará abierto durante las 24 horas del día
            </p>

            <br>

            <p class="lead" style="color:black;text-align:left">
                <img src="{{ asset('img/seguridad.png') }}" alt="Icono de seguridad" id="seguridad" style="height: 70px; margin-right: 10px; background-color: #262626; border-radius:5px">
                <span style="font-size:1.90rem; font-weight:bold">Viaje sin preocupaciones</span>
            </p>
            
            <p class="lead" style="color:black; text-align:left;">
                Llega seguro a tu casa sin temor de que te suceda algo
            </p>
</div>


            <!-- Cambiar este div por la imagen -->
            <div class="col-lg-4 me-autos">
                <img src="{{ asset('img/logo-beber-carro.png') }}" alt="Prohibido beber" class="img-fluid" style="max-width: 78vh;">
            </div>
        </div>
    </div>
</section>

<div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

        <!-- testimon Section-->
        <section class="pag-section portfolio" id="comentarios">
            <div class="container">
            <h2 class="pag-section-heading text-center text-black" style="text-align: center">Comentarios</h2>
                <!-- About Section Heading-->
                <!-- Icon Divider-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                    <div id="commentCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- First comment -->
        <div class="carousel-item active">
            <div class="comment-card">
                <img src="{{ asset ('img/ñaño.png')}}" class="rounded-circle profile-picture" alt="Profile Picture" width="50" height="50">
                <div class="comment-details">
                    <h5>Johan Sebastián</h5>
                    <p>Brew Ride ha simplificado tanto mis desplazamientos que
                        ya no puedo imaginar cómo era antes. La posibilidad
                        de programar viajes con anticipación me ha salvado
                        en más de una ocasión, especialmente en días de mucho
                        trabajo o eventos importantes.
                    </p>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <!-- Second comment -->
        <div class="carousel-item">
            <div class="comment-card">
                <img src="{{ asset ('img/yilmer.png') }}" class="rounded-circle profile-picture" alt="Profile Picture" width="50" height="50">
                <div class="comment-details">
                    <h5>Yilmer Alejandro</h5>
                    <p>Como conductor de Brew Ride, me encanta poder generar
                        ingresos adicionales de manera flexible. La plataforma
                        es transparente y justa, lo que me brinda tranquilidad
                        y confianza mientras brindo un servicio de calidad a
                        los usuarios. ¡Es una experiencia gratificante en todos
                        los sentidos!.
                    </p>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <!-- Three comment -->
        <div class="carousel-item">
            <div class="comment-card">
                <img src="{{asset ('img/otaku.jpg') }}" class="rounded-circle profile-picture" alt="Profile Picture" width="50" height="50">
                <div class="comment-details">
                    <h5>Felipe Gutierrez</h5>
                    <p>¡Qué maravilla es Brew Ride! Además de la comodidad y
                        la seguridad, también me encanta la variedad de
                        opciones que ofrece. Desde viajes compartidos hasta
                        autos de lujo, siempre puedo elegir la opción que mejor
                        se adapte a mis necesidades y presupuesto.
                    </p>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <!-- Four comment -->
        <div class="carousel-item">
            <div class="comment-card">
                <img src="{{ asset ('img/yo.png') }}" class="rounded-circle profile-picture" alt="Profile Picture" width="50" height="50">
                <div class="comment-details">
                    <h5>Jose Perafan</h5>
                    <p>Lo que más me gusta de Brew Ride es la seguridad
                        que ofrece. Siempre puedo ver quién es mi conductor
                        y qué vehículo está utilizando. Además, sé exactamente
                        cuánto voy a pagar antes de subirme al auto.
                        ¡Es genial no tener sorpresas desagradables al
                        final del viaje!
                    </p>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <!-- Add more comments as needed -->
    </div>
    <!-- Carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#commentCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#commentCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <!-- Indicator -->
    <ol class="carousel-indicators">
        <li data-bs-target="#commentCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#commentCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#commentCarousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#commentCarousel" data-bs-slide-to="3"></li>
        <!-- Add more indicators as needed -->
    </ol>
</div>
                    </div>
                </div>
            </div>
        </section>

    
        <!-- Contact Section-->
        <section class="pa-section portfolio" id="contact" style="background-image: url('{{ asset('img/fondo2.jpg') }}'); background-size: cover; background-position: center center; margin-top: 100px; overflow-x: hidden">>
            <div class="container">
            <h2 class="pa-section-heading text-center text-white" style="text-align: left">Contactos</h2>
                <!-- About Section Heading-->
                <!-- Icon Divider-->
                <!-- Icon Divider-->
                <div class="divider-custom divider-light"></div>
                <!-- Contact Section Form-->
                <div class="row justify-content-left">
                    <div class="col-lg-8 ">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form action="{{route('guardar.informacion')}}" method="POST">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nombre completo</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">*Campo obligatorio.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Correo</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">*Campo obligatorio.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Número telefónico</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">*Campo obligatorio.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Mensaje</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">*Campo obligatorio.</div>
                            </div>
                        
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                        
                            <!-- Submit error message-->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" type="submit" style="background: #8B4512; border: none; color: white; width: 196px; height: 57px">Enviar</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>


        <!-- Footer-->
        <footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Columna del logo -->
            <div class="col-lg-0 mb-5 mb-lg-0">
                <a href="home.html" target="_blank">
                    <img src="{{ asset('img/logo_texto-removebg-preview.png') }}" alt="Logo" class="img-fluid" width="250px" height="250px">
                </a>
            </div>
            

            <!-- Columna de la compañía -->

            <div class="col-lg-1">
                <h4 class="mb-4" style="color: #B8B1A9">Compañía</h4>

                <a href="/acerca" style="text-decoration: none">
                    <p class="lead efecto-color">Acerca de</p>
                </a>


                <a href="/privacidad" style="text-decoration: none">
                    <p class="lead efecto-color">Privacidad</p>
                </a>

                <a href="/términos" style="text-decoration: none">
                    <p class="lead efecto-color">Términos y Condiciones</p>
                </a>
            </div>

            <!-- Nuevo div al lado de la compañía -->
            <div class="col-lg-0">
                <h4 class="mb-4" style="color: #B8B1A9">Contactos</h4>
                <p class="lead text" style="color: #7A7A7A">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span style="margin-left: 5px;">Diagonal 28 #17 - 147</span>
                </p>

                <p class="lead text" style="color: #7A7A7A">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span style="margin-left: 5px;">(+57)88 1206 2092</span>
                </p>

                <p class="lead text" style="color: #7A7A7A">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span style="margin-left: 5px;">brewride@gmail.com</span>
                </p>
            </div>

            <div class="col-lg-0">
    <h4 class="mb-4" style="color: #B8B1A9; margin-top:10px">
        Para más información, ofertas y noticias
    </h4>
    
    <form action="{{ route('guardar.store') }}" method="POST">
    @csrf
        <div class="form-floating mb-3">
            <input class="form-control" id="emailFooter" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
            <label for="emailFooter">Ingrese su correo</label>
            <div class="invalid-feedback" data-sb-feedback="emailFooter:required">*Campo obligatorio.</div>
        </div>
        <button class="btn btn-primary btn-xl" type="submit" style="background: #8B4512; border: none; width: 186px; height: 57px">Enviar</button>
    </form>
</div>
<div class="d-flex justify-content-center align-items-center">
    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com"><i class="fab fa-fw fa-facebook-f"></i></a>
    <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com"><i class="fab fa-fw fa-instagram"></i></a>
    <a class="btn btn-outline-light btn-social mx-1" href="https://www.twitter.com"><i class="fab fa-fw fa-twitter"></i></a>
</div>

    </div>
    </div>
</footer>

        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Brew Ride: Todos los derechos reservados. 2024</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
