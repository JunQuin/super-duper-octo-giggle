<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('INEI') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-tailwind.png">
    <script src="js/main.js"></script>
</head>
<body class="antialiased bg-body text-body font-body bg-gradient-to-r from-cyan-500 to-blue-500">
<section class="mt-6">
    <h1 class="text-5xl mb-4 leading-tight font-bold font-heading text-center pt-2">Lista de inscripci&oacute;n</h1>
    <div class="max-w-3xl mx-auto rounded">
        <div class="inline-flex align-middle">
            <div>
                <select id="nivel" name="nivel" class="p-4 mr-2 text-xl font-bold rounded text-blue-900 lg:mb-6">
                    <option value="0">Filtrar por nivel...</option>
                    <option value="1">Secundaria</option>
                    <option value="2">Preparatoria</option>
                    <option value="3">Todos</option>
                </select>
            </div>
            <script>
                function url(){
                    var nivel = document.getElementById('nivel').value
                    location.href='{{ route('listarNivel') }}/'+ nivel;
                }
            </script>
            <div>
                <button onclick="validar_ano(Event); url();"
                        class="p-4 rounded-full border-deep-orange-900 btn bg-deep-orange-400 text-deep-orange-400-contrast text-base hover:bg-deep-orange-800 hover:text-deep-orange-800-contrast">{{ __('Filtrar') }}</button>
            </div>
        </div>
        <ul class="space-y-4 lg:space-y-6">
            @foreach($alumno_datos as $alumno_dato)
                <li class="p-6 my-4 rounded shadow bg-grey-50" style="margin-bottom: 24px;">
                    <a href="{{ route('mostrarDatos') }}/{{ __($alumno_dato->alumnoCurp) }}" target="_blank"
                       class="w-full flex justify-between items-center text-left font-bold font-heading hover:text-grey-600">
                        <span class="text-xl uppercase">{{ __($alumno_dato->alumnoApellidoPaterno. ' '. $alumno_dato->alumnoApellidoMaterno. ' ' .$alumno_dato->alumnoNombre) }} &#8212; Curp: {{ __($alumno_dato->alumnoCurp) }}</span>
                        <svg class="w-7 h-8 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
</body>
<script>
    function validar_ano(Event) {
        var ano = document.getElementById("nivel").value;
        if (ano === '0') {
            alert('Seleccione un Nivel');
            var elements_form = document.getElementsByClassName("formulario");
            // var names = '';
            for (var i = 0; i < elements_form.length; i++) {
                elements_form[i].method = "dialog";
            }
        }
    }
</script>
</html>
