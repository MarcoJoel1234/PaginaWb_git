@extends('layouts.app')
@section('title', 'Pagina 1')
@vite(['resources/css/paginas.css'])
@section('content')
    <section class="tema1">
        <h1>1. Legislación informatica</h1>
        <p>La legislación informática es un conjunto de normas y leyes que regulan el uso de la informática y las tecnologías de la información. Estas leyes tienen como objetivo proteger los derechos de los usuarios y garantizar la seguridad y privacidad de la información.</p>
        <div class="text-img">
            <p>La legislación informática abarca diferentes aspectos, como la protección de datos personales, la seguridad de la información, la propiedad intelectual y los delitos informáticos. En muchos países, existen leyes específicas que regulan el uso de la informática y las tecnologías de la información, como la Ley de Protección de Datos Personales o la Ley de Propiedad Intelectual.</p>    
            <img id="img1" class="img" src="Images/p1img2.jpg" alt="Legislación informatica" />
        </div>
        <h2><b>Principales Leyes en México</b></h2><br>
            <p><b>Código Penal Federal:</b><br>
            Regula los delitos informáticos como el acceso no autorizado, la alteración de información y la intervención de comunicaciones privadas.<br><br>
            
            <b>Ley Federal de Protección de Datos Personales en Posesión de los Particulares:</b><br>
            Establece las normas para el tratamiento de datos personales y protege la privacidad de los individuos.<br><br>
            
            <b>Ley de Firma Electrónica Avanzada:</b><br>
            Regula el uso de firmas electrónicas para garantizar la autenticidad y la integridad de documentos digitales.<br><br>
            
            <b>Ley de Comercio Electrónico:</b><br>
            Promueve y regula las transacciones comerciales realizadas a través de medios electrónicos.</h2>
    </section>
    <section class="tema1.1">
        <h1>1.1 Conceptos de derechos de autor, privacidad y protección de datos</h1>
        <p>
            <b>Derechos de Autor:</b><br>
            Protección legal de creaciones originales como libros, música y software, otorgando al creador derechos exclusivos sobre su uso y distribución. Permite controlar y recibir compensación por la obra.<br><br>

            <b>Privacidad:</b><br>
            Derecho de las personas a mantener su información personal y actividades privadas protegidas de la intrusión de terceros. Incluye el control sobre quién accede a su información.<br><br>
            
            <b>Protección de Datos:</b><br>
            Prácticas y leyes que garantizan el uso seguro y responsable de la información personal, incluyendo derechos de acceso, rectificación, cancelación y oposición. Asegura que los datos se recolecten y usen con consentimiento.</p>

            <img id="img2" class="img" src="Images/p1img1.jpg" alt="Derechos de autor, privacidad y protección de datos" />
    </section>
@endsection
