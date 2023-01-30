<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WASICASH</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        
        
        <!-- HTML -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/630d964ab6.js" crossorigin="anonymous"></script>
        
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
                    WASICASH</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Realizar_Prestamo">¿Como realizar un prestamo?</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Servicios</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#beneficios">Beneficios</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#cliente">Clientes</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Nosotros</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Ayuda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('dashboard')}}">Ingreso</a></li>
                    </ul>
                </div>
            </div>
        </nav>



        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="wasicash-img masthead-avatar mb-5" src="assets/img/wasicash.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">PRESTAMOS RAPIDOS SEGUROS Y FLEXIBLES</h1>
               
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <a class="btn btn-primary btn-xl text-uppercase" target="_blank" href="https://wa.link/papls9">Contactanos</a>
                
            </div>
        </header>



        <!-- Services-->
        <section class="page-section" id="Realizar_Prestamo">
            <div class="container">
                <div class="text-center">
                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 titulo">¿Como realizar un prestamo?</h2>
                     <!-- Icon Divider-->
                    <div class="divider-custom">
                    <div class="divider-custom-line linea"></div>
                    <div class="divider-custom-icon icono"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line linea"></div>
                    </div>
                    
                   
                </div>
                <div class="row text-center">
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-thin fa-rectangle-list fa-stack-1x fas fa-inverse"></i>
                            

                        </span>
                        <h4 class="my-3">1. Completar el formulario</h4>
                        <p class="text-muted parrafo">
                            Debe realizar el breve formulario con sus datos basicos
                        </p>
                    </div>
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-thin fa-id-card fa-stack-1x fas fa-inverse"></i>
                           
                          
                        </span>
                        <h4 class="my-3">2. Tener el DNI a la mano</h4>
                        <p class="text-muted parrafo">
                            Necesitamos informacion de tu DNI vigente para validar su perfil    
                        </p>
                    </div>
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-piggy-bank fa-stack-1x fas fa-inverse"></i>
                        </span>
                        <h4 class="my-3">3. Cuenta de banco a su nombre</h4>
                        <p class="text-muted parrafo">
                            Usamos esta informacion para realizar el deposito del prestamo 
                        </p>
                    </div>
                </div>
            </div>
        </section>



        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Nuestros Servicios</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/personas.png') }}" alt="..." />
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 3-->


                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/empresas.png') }}"  alt="..." />
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>



        
        <!-- Services-->
        <section class="page-section" id="beneficios">
            <div class="container">
                <div class="text-center">
                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 titulo">¿Porqué utilizar Wasicash? </h2>
                     <!-- Icon Divider-->
                    <div class="divider-custom">
                    <div class="divider-custom-line linea"></div>
                    <div class="divider-custom-icon icono"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line linea"></div>
                    </div>
                    
                    
                </div>
                <div class="row text-center">
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-percent fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Intereses Bajos</h4>
                    </div>
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-dollar-sign fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Entrega de dinero rapido</h4>
                    </div>
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-thumbs-up fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Elige la flexibilidad del pago</h4>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-person-pregnant fa-stack-1x fa-inverse"></i>
                        </span>
                       
                        <h4 class="my-3">Pausa de 2 meses por  embarazo</h4>
                    </div>
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-hand-holding-heart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Pausa de 2 meses por salud </h4>
                    </div>
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-money-check-dollar fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Bono por recomendacion</h4>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-regular fa-face-smile fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Sorteos y premios entre nuestros clientes</h4>
                    </div>
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa-solid fa-hand-holding-hand fa-stack-1x fa-inverse"></i>

                        </span>
                        <h4 class="my-3">Descuento por segundo prestamo</h4>
                    </div>
                    <div class="col-md-4 cards">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Seguridad en los prestamos</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services-->
        <section class="page-section portfolio" id="cliente">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Opinion de nuestros clientes</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="embed-responsive embed-responsive-16by9">
                    <!-- autoplay;  -->
                    <iframe class="embed-responsive-item" width="100%" height="696" src="{{ asset('assets/1.mp4') }}" ></iframe>

                </div>

                
           </div>

                    
        </section>



        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Acerca de nosotros</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Somos una empresa con mas de 10 años en el ambito del prestamo de dinero, contamos con muy buen personal y atencion a nuestros clientes, asi como tambien ofrecemos prestamos rapidos, seguros y flexibles.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Como empresa nos preocupa el bienestar de nuestros clientes es por ello que decidimos optar por el metodo flexible de pago y tambien nuestro compromiso con las embarazadas, las personas enfermas y por dias festivos brindando una pausa a su credito</p></div>
                </div>
                <!-- About Section Button-->
               
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">¿Necesitas ayuda?</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
              

        <div class="row text-center">
            <div class="col-md-4 ">                
                <h4 class="my-3">¿Qué necesito para obtener mi préstamo?</h4>             


                <p class="text-muted">
                    •	Número de teléfono móvil
                    •	Correo electrónico propio
                    •	DNI
                    •	Cuenta de banco a tu nombre (Nombre de banco y numero de cuenta)
                </p>
            </div>
            <div class="col-md-4 ">
             
                <h4 class="my-3">¿Préstamo Inmediato?</h4>
                <p class="text-muted ">Wasicash es inmediato. Aprobamos o denegamos tu credito personal inmediatamente, sin esperas.</p>
            </div>
            <div class="col-md-4 ">
              
                <h4 class="my-3">¿Esta Wasicash Interesado en su salud?</h4>
                <p class="text-muted ">Si, en wasicash tenemos 2 meses de tiempo de gracia total es decir puede solicitar un pause en su deuda por enfermedad, fechas festivas o embarazo. </p>
            </div>
            <div class="col-md-4 ">                
                <h4 class="my-3">¿Cuándo pago mi préstamo?</h4>
                <p class="text-muted">Págalo el día que vence la cuota que elegiste. Siempre puedes pagar antes o adelantar capital de esta manera te reduce el interés. </p>
            </div>
            <div class="col-md-4 ">
             
                <h4 class="my-3">¿Qué es el modelo flexible?</h4>
                <p class="text-muted ">Nuestro modelo flexible nos permite flexibilidad en las cuotas es decir usted puede avanzar la deuda de acuerdo a sus posibilidades </p>
            </div>
            <div class="col-md-4 ">
              
                <h4 class="my-3">¿Cómo Funcionan los préstamos con Wasicash?</h4>
                <p class="text-muted ">Monto: Solicita un préstamo desde S/ 100 a S/ 10,000 si eres un nuevo cliente. Si eres un cliente habitual te hace reducimos el interes</p>
            </div>
            
        </div>


            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Wasicash</h4>
                        <p class="lead mb-0">
                            Regulados por la SBS
                            <br />
                            Lima, Peru
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Encuentranos</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>

                    

                    


                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Acerca de nosotros</h4>
                        <p class="lead mb-0">
                            Cualquier duda o consulta porfavor comunicarse 
                            <a href="https://wa.link/papls9">aqui</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Wasicash 2023</small></div>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0 portafoliaso" >Prestamo</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/personas.png') }}" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        Brindamos servicios de prestamo a un bajo porcentaje de intereses, ofrecemos prestamos desde 100 soles hasta 10 000 soles
                                        ,contamos con un servicio rapido y flexible de acuerdo a tus necesidades, tambien ofrecemos apoyo a negocios pequeños como 
                                        tiendas pequeñas etc.
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar Ventana
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0 portafoliaso">Modelo Flexible</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{ asset('assets/img/portfolio/empresas.png') }}"  alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
                                        A diferencia de otros bancos, nuestro servicio "modelo flexible" permite a nuestros clientes beneficios por motivos de salud
                                        o embarazo, teniendo un tiempo de gracia total hacia nuestros clientes hasta por 2 cuotas. Ademas de ofrecer un prestamo "pago flexible"
                                        que nos permite brindarle a nuestros clientes el avance de su deuda de acuerdo a sus posibilidades
                                    </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      






        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
