@extends('layouts.template')

@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Proyecto TallerSW | Grupo 3 </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/m.css">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/news.css">
        <link rel="stylesheet" type="text/css" media="screen" href="stylesheet/carausel.css">
     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture|Lato|Montserrat|PT+Sans|Patrick+Hand|Playfair+Display:700|Poor+Story|Slabo+27px" rel="stylesheet">
        <style type="text/css">

            .card {

                max-width: 300px;       
                margin: auto;
                text-align: center;
                font-family: arial;
                height: 500px;
            }

            .mascota {
                color: rgb(53, 94, 228);
                font-size: 19px;
                margin-top: 0px;
            }

            /*
                button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: rgb(209, 27, 27);
                background-color: #0a3d62;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }
           */

            button:hover, .faculty>a:hover {
                opacity: 0.7;
            }

            .card h1{
                font-size: 24px;
                margin-top: 10px;
            }

            .card:hover{
                box-shadow: 2px 4px 8px 2px grey;
            }
            .testimonio{
                font-size: 15px;
                margin-top: -14px;
            }

            .staffp {
                font-family:'arial';
                font-size: 18px;
                margin-top: -30px;
            }

            @media only screen and (max-width: 768px) {

                .staffp{
                    font-family:'arial';
                    font-size: 4vw;
                    margin-top: -21px;
                }

                .card{
                    height: 400px;
                    width: 273px;
                }
                .card:hover{
                    box-shadow: 2px 4px 8px 2px grey;
                }
            }

        </style>
    </head>

    <body>

        <!--************** VISTA DE CLIENTES *******************-->
        
        <div class="faculty"style="text-align: center; padding-top: 20px; padding-bottom:10px; background-color: white; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; ">
            <h2 class="display-4"><b>¿Qué dicen nuestros clientes?</b></h2>
        </div>
        <div class="container">
            <div class="jumbotron" style="box-shadow: 0 0 15px grey">


                <div class="card-deck">   

                    <div class="card" >
                        <img class="img-fluid" src="{{ asset('img/clientes/pet1.jpg') }}"  style="width: 237px" height="150px" >
                        <h1>Sandra Portales</h1>
                        <p class="mascota">"Kira"</p>
                        <p class="testimonio">
                            Es una clínica de gran profesionalismo, detectaron una alergia alimentaria a mi Bullterrier, cosa que
                            ninguna otra clínica de Lima pudo. Los exámenes son rápidos y tienen muy buen post operatorio.
                        </p>

                      
                    </div>

                    <div class="card">
                        <img class="img-fluid" src="{{ asset('img/clientes/pet2.PNG') }}"  style="width: 237px" height="150px">
                        <h1>Lucero Velasquez</h1>
                        <p class="mascota">"Sultán"</p>
                        <p class="testimonio" style="padding-top: 21px;">
                            Es excelente la atención, los profesionales que trabajan ahí hacen muy bien su trabajo. La recomiendo...
                        </p>

                        
                    </div>

                    <div class="card">
                        <img class="img-fluid" src="{{ asset('img/clientes/pet3.PNG') }}"  style="width: 237px" height="150px">
                        <h1>Sofia Miller</h1>
                        <p class="mascota">"Cookie"</p>
                        <p class="testimonio">
                            Buena atención, dedicados.. se nota el amor a su trabajo.. 100% recomendable!!!!
                        </p>

                        
                    </div>

                    <div class="card">
                        <img class="img-fluid" src="{{ asset('img/clientes/pet4.jpeg') }}"  style="width: 237px" height="150px">
                        <h1>Alex Lopez</h1>
                        <p class="mascota">"Choco"</p>
                        <p class="testimonio">
                            Agradecer de todo corazón la atención de su médico Carlos Romero. Una gran persona, excelente
                            profesional y con un tremendo corazón. Muchas gracias por todo. La recomiendo un 1000%.
                        </p>

                   
                    </div> 



                </div>
                <br> <br>
                <div class="card-deck">

                    <div class="card">
                        <img class="img-fluid" src="{{ asset('img/clientes/pet5.jpg') }}"  style="width: 237px" height="150px">
                        <h1>Leonardo Durán</h1>
                        <p class="mascota">"Lassie"</p>
                        <p class="testimonio">
                            La mejor clínica veterinaria de Lima, excelente atención!!
                        </p>

                      
                    </div>

                    <div class="card">
                        <img class="img-fluid" src="{{ asset('img/clientes/pet6.PNG') }}"  style="width: 237px" height="150px">
                        <h1>Margorie Córdova</h1>
                        <p class="mascota">"Toby"</p>
                        <p class="testimonio">
                            No tengo los nombres de todos los que nos atendieron pero nuestros agradecimientos van para todos.
                            Ustedes diagnosticaron a nuestra viejita Cami y comprendieron que una tortuga geriátrica es digno de vida.
                        </p>

                        
                    </div>

                    <div class="card">
                        <img class="img-fluid" src="{{ asset('img/clientes/pet7.jpg') }}"  style="width: 237px" height="150px">
                        <h1>Susana De León</h1>
                        <p class="mascota">"Maximo"</p>
                        <p class="testimonio">
                            La vez que lleve a mi gato lo atendieron muy bien. Debo decir de todas
                            formas que ha sido algo de rutina, no grave. La veterinaria muy amorosa con mi michi.
                        </p>

                       
                    </div>


                    <div class="card">
                        <img class="img-fluid" src="{{ asset('img/clientes/pet8.jpg') }}"  style="width: 237px" height="150px">
                        <h1>Marcos Lazo</h1>
                        <p class="mascota">"Ron"</p>
                        <p class="testimonio">
                            Son mis veterinarias desde hace más de 20 años y todo positivo con ellas, da gusto ir al veterinario.
                            Mari Ángeles Frontera es una gran profesional y Bea Rodrigo también, son amables y cariñosas con nuestras mascotas.
                        </p>

                        <!--<p><button>Mira nuestros servicios</button></p>-->
                    </div>

                </div>

            </div>
        </div> 

    </body>
@endsection
