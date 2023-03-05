@extends('layouts.template')

@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="section_home">

        {{-- CAROUSEL HOME --}}
        <div id="carousleHome" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators indicators_home">
                <button type="button" data-bs-target="#carousleHome" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousleHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousleHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item slide-home active text-center">
                    <div class="carousel-caption">
                        <div class="slider_content">
                            <h4><b>Clínica veterinaria "Patitas"</b></h4>
                            <p class="mb-2">Pendientes del bienestar de tu mascota</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slide-home text-center">
                    <div class="carousel-caption">
                        <div class="slider_content">
                            <h4><b>Clínica veterinaria "Patitas"</b></h4>
                            <p class="mb-2">Pendientes del bienestar de tu mascota</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slide-home text-center">
                    <div class="carousel-caption">
                        <div class="slider_content">
                            <h4><b>Clínica veterinaria "Patitas"</b></h4>
                            <p class="mb-2">Pendientes del bienestar de tu mascota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- HOME 2 --}}
        <div class="div_ini_02 animated fadeInUp">
            <div class="col-12 col-md-10 col-lg-8 mx-auto px-3">
                <h2>CLÍNICA VETERINARIA "PATITAS"</h2>
                <p>Patitas es una clínica veterinaria dedicada al cuidado y bienestar de tus queridas mascotas. Nuestro equipo de profesionales altamente capacitados y amantes de los animales se dedica a brindar la mejor atención médica y servicios especializados para garantizar que tus amigos peludos tengan una vida feliz y saludable. En Patitas, nos enorgullece ofrecer servicios de alta calidad, desde exámenes de rutina y vacunas hasta cirugías y tratamientos especializados. Nos preocupamos por cada mascota como si fuera nuestra propia, y estamos comprometidos a hacer todo lo posible para mantenerlos saludables y felices. ¡Confía en nosotros para cuidar de tus patitas!</p>
            </div>
        </div>

        {{-- HOME 3 --}}
        <div class="div_ini_03">
            <div class="col-12 col-md-10 row mx-auto">
                <div class="col-12 col-md-4 div_ini_03_img01">
                    <img class="img-fluid" src="{{ asset('img/inicio/04.jpg') }}" alt="">
                </div>
                <div class="col-12 col-md-4 div_ini_03_img02">
                    <img class="img-fluid" src="{{ asset('img/inicio/05.jpg') }}" alt="">
                </div>
                <div class="col-12 col-md-4 div_ini_03_img03">
                    <img class="img-fluid" src="{{ asset('img/inicio/06.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-10 col-lg-8 mx-auto px-3 pt-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid ratione quam molestiae
                    necessitatibus odit. Quasi pariatur et, accusantium officia autem quisquam sequi esse, reiciendis nobis
                    eos, voluptates soluta libero. ipsum dolor sit amet, consectetur adipisicing elit. Id, similique ex?
                    Repudiandae aliquam nam voluptas, eius illo amet iste perspiciatis, nesciunt laudantium expedita
                    doloribus numquam itaque quas, reprehenderit omnis magni.</p>
            </div>
        </div>

        {{-- HOME 4 --}}
        <div class="div_ini_04">
            <div class="col-12 col-md-10 col-lg-8 div_ini_04_container row mx-auto align-items-md-center align-items-xl-start">
                <div class="col-12 col-md-6 div_ini_04_container_01">
                    <h4><b>Es un hecho establecido hace demasiado tiempo que un</b></h4>
                    <p class="sub_title">Lector se distraerá con el contenido del texto</p>
                    <p>Lorem ipsum dolor sit amet, consectetur aadipisicing elit. Libero id consectetur impedit incidunt ut,
                        sequi soluta illum consequatur assumenda magnam, repudiandae distinctio culpa blanditiis delectus
                        nihil non aliquam minima, reiciendis! ipsum dolor sit amet, consectetue distinctio culpa blanditiis
                        delectus nihil non aliquam minima, reiciendis! ipsum dolor sit amet, consectetur am? Excepturi minus
                        culpa, laboriosam debitis.</p>
                </div>
                <div class="col-12 col-md-6 div_ini_04_container_02 text-center">
                    <img class="img-fluid" src="{{ asset('img/inicio/foto-2.jpg') }}" alt="foto circular">
                </div>
            </div>
        </div>

        {{-- HOME 5 --}}
        <div class="div_ini_05">
            <div class="col-12 col-md-10 col-lg-8 div_ini_05_container row mx-auto">
                <div class="col-12 col-md-6 div_ini_05_container_01">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam ipsa error laudantium, inventore
                        exercitationem voluptas facilis, mollitia non, earum, dolores sit quos sint quo blanditiis
                        temporibus eius animi soluta aliquam.</p>
                </div>
                <div class="col-12 col-md-6 div_ini_05_container_02 text-center">
                    <img class="img-fluid" src="{{ asset('img/inicio/baner-2.jpg') }}" alt="">
                </div>
            </div>
        </div>
        {{-- HOME6 --}}
        <div class="home6">
            <h6 class="container">Si estás buscando atención profesional y amorosa para tu mascota, has llegado al lugar correcto. En nuestra clínica veterinaria contamos con un equipo de expertos en el cuidado y tratamiento de animales de compañía. Desde perros y gatos hasta aves y roedores, nuestro objetivo es proporcionar la mejor atención médica para garantizar la salud y bienestar de tu mascota. Ofrecemos una amplia gama de servicios, desde exámenes de rutina hasta tratamientos avanzados, siempre utilizando las últimas técnicas y tecnologías para garantizar los mejores resultados. En nuestra clínica, nos esforzamos por hacer que cada visita sea lo más agradable y libre de estrés posible tanto para tu mascota como para ti.</h6>
        </div>
    </div>
@endsection
