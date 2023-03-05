<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clínica veterinaria "Patitas"</title>
    <link rel="icon" type="image/jpg" href="images/logo.jpg">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">    
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture|Lato|Montserrat|PT+Sans|Patrick+Hand|Playfair+Display:700|Poor+Story|Slabo+27px" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/m.css">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/news.css">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/carausel.css">
    
    @yield('styles')
</head>

<body>

    <header class="animated fadeIn overflow-hidden header">
        <div class="row align-items-center col-12 col-xl-11 mx-auto">
            <div class="col-auto text-center">
                <a class="" href="{{url('home')}}">
                    <img class="img-fluid img-logo" src="{{asset('img/logo.png')}}" alt="">
                </a>
            </div>
            <div class="col ">
                <div class="d-none d-md-block">
                <ul class="nav nav-fill  justify-content-end nav-menu menuflex">
                    

                    <a class="nav-link " href="{{url('home')}}">Inicio</a>
                    
                    <a class="nav-link" href="{{url('nosotros')}}">Nosotros</a>

                    <a class="nav-link" href="{{url('clientes')}}">Clientes</a>

                    <a class="nav-link" href="{{url('servicios')}}">Servicios</a>
                    

                    {{-- <a class="borde-menu-header">|</a> --}}
                </ul>
                </div>
                <button class="btn btn-light btn-abrir-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>
            </div>
            
        </div>          
    </header>

    <div class="offcanvas offcanvas-start header-offcanvas" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Menú</h5>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto nav-main">
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                
                            text-center 
                            offcanvas-enlace                                   
                            {{ (request()->is('home')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('home')}}"
                        >Inicio</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                    
                            text-center
                            offcanvas-enlace
                            {{ (request()->is('nosotros')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('nosotros')}}"
                        >Nosotros</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('clientes')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('clientes')}}"
                        >Clientes</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                
                            text-center 
                            offcanvas-enlace                                   
                            {{ (request()->is('servicios')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('servicios')}}"
                        >Servicios</a
                    >
                </li>
            </ul>
        </div>
    </div>

    <main class="overflow-x-hidden pt-2 main-web">
        @yield('content')
    </main>

    <!--<footer>
        <div class="col-12 col-md-10 mx-auto">
            <p>
                <span>Telf: (511) 758 9635</span> <br class="d-md-none">
                <span>Calle Los Laureles 698 - Los Olivos - Lima</span> <br class="d-md-none">
                <span>atención@miempresa.com</span> <br class="d-md-none">
            </p>
            <p>
                <a class="hvr-grow-shadow" target="_blank" href="https://agenciahdc.com"><small>Diseñado por Agencia HDC</small></a>
            </p>
        </div>
    </footer>-->

    <!-- JavaScript Bundle with Popper -->
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.scrollflow.min.js')}}"></script>
    @stack('scripts')
</body>

</html>
