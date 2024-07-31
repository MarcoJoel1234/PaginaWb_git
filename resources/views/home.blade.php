@extends('layouts.app')
@section('title', 'Inicio')
@vite(['resources/css/home.css'])
@section('content')
    <!-- Portada -->
    <section class="portada">
        <div class="container">
            <div class="portada-header">
                <img class="portada-image" src="Images/logoUpt.png" />
                <h2 class="portada-title">UNIVERSIDAD POLITÉCNICA DE TECÁMAC</h2>
            </div>
            <div class="portada-content">
                <p class="dates">INGENIERÍA EN SOFTWARE<br><b>"REPORTE DE INVESTIGACION"</b></p>
                <p class="dates"><b>UNIDAD III</b></p>
                <p class="dates">ASIGNATURA:<br> <b>SEGURIDAD DE LA INFORMACIÓN</b></p>
                <p class="dates">PRESENTA<br><b>MARCO JOEL ANGEL VELASCO</b></p>
                <p class="dates">DOCENTE<br><b>DR.NESTOR APOLO LÓPEZ GONZÁLEZ</b></p>
                <p class="dates">GRUPO:<br><b>3924IS</b></p>
            </div>
            <div class="portada-footer">
                <img class="portada-image" src="Images/logoIS.png" />
                <p class="dates"><b>MES 2024</b></p>
            </div>
    </section>

    <!-- Introducción -->
    <section class="introduction">
        <h2 class="introduction-title">Introducción</h2>
        <p class="introduction-content">
            La seguridad de la información es un tema de gran importancia en la actualidad, ya
            que la información es un activo muy valioso para las organizaciones. La seguridad de la información se refiere a la protección de la información contra cualquier amenaza que pueda comprometer su confidencialidad, integridad y disponibilidad. En este reporte se abordarán los conceptos básicos de la seguridad de la información, así como
            las principales amenazas y vulnerabilidades a las que se enfrentan las organizaciones en la actualidad.<br>

            La legislación informática y la ética en el ámbito digital son temas cruciales en el contexto actual de la sociedad de la información. La protección de datos personales, los derechos de autor y la privacidad son elementos fundamentales que deben ser comprendidos y respetados tanto por individuos como por organizaciones. La legislación relacionada con estos temas varía entre países, pero existen leyes y normativas internacionales que
            buscan establecer un marco común para su regulación.<br>

            Además, la ética informática aborda cuestiones sobre el uso responsable y moral de la tecnología, mientras quelos delitos informáticos representan desafíos legales y de seguridad que deben ser abordados con códigos de conducta y políticas claras. Estos temas son esenciales para garantizar un uso seguro y ético de las tecnologías de la información y la comunicación en nuestra vida cotidiana y profesional.
        </p>
    </section>
@endsection
