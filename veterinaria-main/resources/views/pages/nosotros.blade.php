@extends('layouts.template')

@section('styles')
    <link href="{{ asset('css/nosotros.css') }}" rel="stylesheet" />
@endsection


@section('content')

          <!--    *******************************OPCIONES DE NAVEGACIÓN******************************   -->

    

        <!--    *******************************NAVEGACIÓN FIN******************************   -->





        <!--    ****************MISION-VISION-OBJETIVOS**********************-->
        <div class="container-fluid dd" style="" align="center">

            <img class="img-fluid" src="images/vision-mission/vision-mission.png" alt=""  >


        </div>
        <div class="container" style="background-color: #a0a0a1; padding-top: 0px; box-shadow: 10px 10px 500px 10px #97d5f6">
            <div class="jumbotron" >
                <h1>Vision <i class="fas fa-eye"></i></h1>
                <span  class="vission-mission-content" style="">
                    Buscar la excelencia en la prevención, detección y curación de enfermedades en animales de compañía, aumentando el nivel
                    de seguridad sanitaria en quienes conviven con ellos y hacerlo de forma sostenible, rentable, profesional y ética; así
                    como mejorar la relación afectiva entre las mascotas y sus propietarios, generando un mayor equilibrio sanitario y emocional en ambos.
                    <br>    Nos inclinamos por mantener la salud de las mascotas en perfecto estado, buscando así el bienestar
                    de los que actualmente son considerados miembros importantes de la familia, mediante la óptima y oportunidad
                    atención con  compromiso y  actitud ética ante nuestros pacientes  y  sus  propietarios.
                </span>
            </div>

            <div class="jumbotron" >
                <h1>Mision <i class="fas fa-rocket"></i></h1>     
                <span class="vission-mission-content">
                    Ofrecer bienestar tanto animal, como a las familias de nuestros pacientes a través de la prestación de servicios médicos
                    veterinarios y complementarios, entregando calidad y satisfacción, superando las expectativas de nuestros clientes,
                    contribuyendo a la innovación y desarrollo profesional del sector Médico Veterinario de la Región.
                </span>
            </div>
            <div class="jumbotron">
                <h1>Objetivos </h1>
                <span class="vission-mission-content">
                    <ul style="list-style:disc;">
                        <li>Aplicar estrategias de prevención, diagnóstico, control y tratamiento de enfermedades para incidir en la salud animal y la salud pública.</li>
                        <li>Evaluar los sistemas de producción animal con base en su función biológica, económica y social, considerando el bienestar animal y el manejo sustentable de los recursos naturales.. </li>
                        
                        <li>Desarrollar investigación y difusión, en beneficio de la sociedad, a través del manejo óptimo de tecnologías de la informática, con una formación humanística y ética de la profesión.</li>
                        <li>Aplicar las buenas prácticas de producción y el sistema de análisis de riesgos y puntos críticos de control (HACCP), mediante la transformación y protección de productos de origen animal, con la finalidad de garantizar inocuidad para el consumidor..</li>   
                    </ul>
                </span>
            </div>
            <br>
        </div>
        <!--    ****************FIN**********************-->
@endsection