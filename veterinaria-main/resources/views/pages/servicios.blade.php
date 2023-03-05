@extends('layouts.template')

@section('styles')
    <link href="{{ asset('css/servicios.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clínica Veterinaria "Patitas felices"</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
 
</head>
<body class="sub_page">

  <section class="service_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-2">
          <h2 class="custom_heading">
            <span>Servicios</span>
          </h2>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-4">
                <div class="img_box">
                  <img src="{{ asset('img/servicios/s-1.png') }}" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Baño y Peluquería
                  </h6>
                  <p>
                    La estética de tu mascota es importante, por eso nuestro servicio de peluquería canina y felina ofrece una amplia variedad de cortes de pelo y baños, tanto estéticos como terapéuticos.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="{{ asset('img/servicios/s-2.png') }}" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Hospedaje
                  </h6>
                  <p>
                    Entre nuestras instalaciones contamos con guarderías para perros y gatos. Para acoger a tus mascotas, es imprescindible que estén vacunados al día y que sean desparasitados antes de su estancia.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="{{ asset('img/servicios/s-3.png') }}" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Hospitalización
                  </h6>
                  <p>
                    Es posible que tu mascota presente síntomas que requieran de atención y vigilancia constante por parte del médico veterinario hasta que estos desaparezcan.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="{{ asset('img/servicios/s-4.png') }}" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Cirugía Láser
                  </h6>
                  <p>
                    El láser de CO2 es una de las más exclusivas, su aplicación en cirugía de tejidos blandos ofrece
                    importantes ventajas en cuanto a acortamiento del procedimiento quirúrgico, cicatrización y
                    recuperación del paciente.
                  </p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="img_box">
                  <img src="{{ asset('img/servicios/s-5.png') }}" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Ecografía
                  </h6>
                  <p>
                    La ecografía es una técnica de diagnóstico muy útil, dado que ofrece mucha información sobre el
                    estado de los órganos internos de manera no invasiva, inmediata y precisa.
                  </p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="img_box">
                  <img src="{{ asset('img/servicios/s-6.png') }}" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Oftalmología
                  </h6>
                  <p>
                    La oftalmología es cada vez más relevancia puesto que una buena visión animal, aporta mayor
                    calidad de vida. La queratoconjuntivitis seca, úlceras corneales indolentes o las anomalías en los
                    párpados, son patologías comunes en determinadas razas.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('img/servicios/tool.png') }}" alt="" class="w-100">
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>

@endsection