<!DOCTYPE html>
<html lang="en">

    
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WASICASH</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
   
    
        
        
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    
    
</head>
<style>
    
    
    body {
  font-family: "Times New Roman", Times, serif;
  text-transform: uppercase;
   }

h1, h2, h3, h4, h5, h6 {
  font-family: "Times New Roman", Times, serif;
  text-transform: uppercase;
}

p, span, a {
  font-family: "Times New Roman", Times, serif;
  text-transform: uppercase;
}


   
    
    
  /* Estilos generales */
body {
  margin: 0;
  padding: 0;
}

/* Estilos para la barra superior */
.navbar {
  background-image: linear-gradient(to right, #3366FF, #9933CC) !important;   
}


.navbar-toggler {
  color: white;
}

/* Estilos para la barra lateral */
.sb-sidenav {
  background-image: linear-gradient(to bottom, #3366FF, #9933CC) !important;
  color: white;
}

.sb-sidenav-menu {
}

.sb-sidenav-menu-heading {  
  font-weight: bold;
}

.nav-link {
  color: white;
  text-decoration: none;
  display: flex;
  align-items: center;  
}

.sb-nav-link-icon {
  margin-right: 10px;
}

.sb-sidenav-footer {
  padding: 20px;
   background-color: transparent !important;
}

.sb-sidenav-menu .nav-link:hover {
  background-color: #99a6ff !important;
  
}
























</style>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ route('dashboard') }}">WASICASH GESTION</a>
   
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('user.config') }}">Configurar mi perfil</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="{{ route('logout2') }}">Salir</a></li>
            </ul>
        </li>
    </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                            <a style="color:white !important" class="nav-link" href="{{route('dashboard')}}">
                            <div class="sb-nav-link-icon">
                                <img src="{{ asset('assets/img/Project/resumen.png') }}" alt=""/>                               
                            
                            </div>
                                Resumen
                        </a>
                        
                       
                       
                        <!--<div class="sb-sidenav-menu-heading">GESTION DE CLIENTES</div>-->
                        
                        <a style="color:white !important" class="nav-link" href="{{ route('interes') }}">
                            <div class="sb-nav-link-icon">
                                <img src="{{ asset('assets/img/Project/tasa-de-interes-flotante.png') }}" alt=""/>
                                
                            </div>
                            Intereses
                        </a>
                        <a style="color:white !important" class="nav-link" href="{{ route('capital') }}">
                            <div class="sb-nav-link-icon">
                                <img src="{{ asset('assets/img/Project/capital.png') }}" alt=""/>
                            </div>
                            Capital
                        </a>
                       
                        <a style="color:white !important" class="nav-link" href="{{ route('historial') }}">
                            <div class="sb-nav-link-icon">
                                <img src="{{ asset('assets/img/Project/historial.png') }}" alt=""/>
                            </div>
                            Historial
                        </a>
                            
                        
                        <a style="color:white !important" class="nav-link" href="{{ route('facturas') }}">
                            <div class="sb-nav-link-icon">
                                <img src="{{ asset('assets/img/Project/factura.png') }}" alt=""/>
                            </div>
                            Pagos del Cliente
                        </a>
                            
                        
                          <a style="color:white !important" class="nav-link" href="{{ route('cliente.list') }}">
                            <div class="sb-nav-link-icon">
                                <img src="{{ asset('assets/img/Project/transferencia-movil.png') }}" alt=""/>
                            </div>
                            Transferencias
                        </a>
                        
                        
                        
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">&copy; DMCA </div>
                    
                </div>
            </nav>
        </div>
        
        
         <script>
        function toggleSidebar() {
            var layoutSidenav = document.getElementById("layoutSidenav");
            layoutSidenav.classList.toggle("sb-sidenav-collapsed");
        }
    
    </script>
        
        <div id="layoutSidenav_content">
          
            @yield('content')

        </div>
        
       
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    

    
    <script     src="{{ asset('js/scripts.js') }}" > </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    
    
    <script  src="{{ asset('js/datatables-simple-demo.js') }}" ></script>

  
    
</body>

</html>














