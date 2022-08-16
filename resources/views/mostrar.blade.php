<!DOCTYPE html>
<html lang="en">
<head>
    <title>INEI INSCRIPCION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'INEI') }}</title>

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
<div>
    <div class="container mx-auto">
        <div class="container mx-auto justify-center">
            <img class="justify-center mx-auto pb-4 pt-4" src="images/LOGO-INEI-BLANCO-MEDIUM.png" alt="">
        </div>

        <h1 class="text-5xl mb-2 leading-tight font-bold font-heading text-center pt-2">Solicitud de
            inscripinscripción</h1>

        <h2 class="text-4xl ml-2 mb-2 leading-tight font-bold font-heading mt-4">Datos del Alumno</h2>
        <div>
            <div class="flex flex-wrap rounded p-2">
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="alumnoApellidoPaterno">Apellido
                            Paterno</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none outline-none rounded-full read-only:bg-grey-200"
                            type="text" name="alumnoApellidoPaterno" placeholder="Ingresa Apellido Paterno" readonly
                            value="{{ ($alumno->alumnoApellidoPaterno) }}"></div>
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Curp</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            type="text" name="alumnoCurp" placeholder="Ingresa Curp" readonly
                            value="{{ ($alumno->alumnoCurp) }}">
                    </div>

                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Numero de celular</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            type="text" name="alumnoCelular" placeholder="Ingresa Numero Celular" readonly
                            value="{{ ($alumno->alumnoCelular) }}">
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Apellido Materno</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            type="text" name="alumnoApellidoMaterno" placeholder="Ingresa Apellido Materno" readonly
                            value="{{ ($alumno->alumnoApellidoMaterno) }}">
                    </div>

                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Fecha de
                            nacimiento </label>
                        <input
                            class="appearance-none w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            type="date" id="alumnoFechaNacimiento" name="alumnoFechaNacimiento" readonly
                            value="{{ ($alumno->alumnoFechaNacimiento) }}">
                    </div>
                    {{--<script>
                        function obo()
                        {
                            alert(document.getElementById("alumnoFechaNacimiento").value);
                        }
                    </script>--}}
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Año al que ingresa</label>
                        @php
                            if($alumno->alumnoAnoIngreso == 1){
                                $ano = 'Primero de Secundaria';
                            }

                            if($alumno->alumnoAnoIngreso == 2){
                                $ano = 'Segundo de Secundaria';
                            }

                            if($alumno->alumnoAnoIngreso == 3){
                                $ano = 'Tercero de Secundaria';
                            }

                            if($alumno->alumnoAnoIngreso == 4){
                                $ano = 'Primero de Preparatoria';
                            }

                            if($alumno->alumnoAnoIngreso == 5){
                                $ano = 'Segundo de Preparatoria';
                            }

                            if($alumno->alumnoAnoIngreso == 6){
                                $ano = 'Tercero de Preparatoria';
                            }
                        @endphp
                        <input
                            class="aappearance-none w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            name="alumnoAnoIngreso" readonly value="{{ ($ano) }}">
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Nombre(s)</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            type="text" name="alumnoNombre" placeholder="Ingresa Nombre del Alumno" readonly
                            value="{{ ($alumno->alumnoNombre) }}">
                    </div>

                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Email</label>
                        <input
                            class="appearance-none w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            type="text" name="alumnoEmail" placeholder="Ingresa Email del Alumno" readonly
                            value="{{ ($alumno->alumnoEmail) }}">
                    </div>
                </div>
                <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Escuela de
                            procedencia</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            type="text" name="alumnoProcedencia" placeholder="Ingresa Escuela de Procedencia" readonly
                            value="{{ ($alumno->alumnoProcedencia) }}">
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Promedio</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                            type="text" name="alumnoPromedio" min="0" max="10" placeholder="Promedio" readonly
                            value="{{ ($alumno->alumnoPromedio) }}">
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-4xl mb-2 leading-tight font-bold font-heading">Domicilio </h2>
        <div class="pt-6 rounded px-4">
            <div class="mb-6">
                <label class="block text-grey-800 font-semibold mb-2" for="">Calle</label>
                <input
                    class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 outline-none rounded-full"
                    type="text" name="alumnoDomicilioCalle" placeholder="Calle" readonly
                    value="{{ ($alumno->alumnoDomicilioCalle) }}">
            </div>

            <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Municipio</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoDomicilioMunicipio" placeholder="Municipio" readonly
                            value="{{ ($alumno->alumnoDomicilioMunicipio) }}">
                    </div>
                </div>
                <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Localidad</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoDomicilioLocalidad" placeholder="Localidad" readonly
                            value="{{ ($alumno->alumnoDomicilioLocalidad) }}">
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Colonia</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoDomicilioColonia" placeholder="Colonia" readonly
                            value="{{ ($alumno->alumnoDomicilioColonia) }}">
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Codigo Postal</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoDomicilioCP" placeholder="Codigo Postal" readonly
                            value="{{ ($alumno->alumnoDomicilioCP) }}">
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-4xl mb-2 leading-tight font-bold font-heading mt-4">Datos del(la) tutor(a)</h2>
        <div class="rounded px-4">
            <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Apellido paterno</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoTutorApellidoPaterno" placeholder="Apellido paterno" readonly
                            value="{{ ($alumno->alumnoTutorApellidoPaterno) }}">
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Apellido materno</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoTutorApellidoMaterno" placeholder="Apellido materno" readonly
                            value="{{ ($alumno->alumnoTutorApellidoMaterno) }}">
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Nombre(s)</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoTutorNombre" placeholder="Nombre(s)" readonly
                            value="{{ ($alumno->alumnoTutorNombre) }}">
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Ocupacion</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoTutorOcupacion" placeholder="Ocupacion" readonly
                            value="{{ ($alumno->alumnoTutorOcupacion) }}">
                    </div>

                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Numero de celular</label>
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoTutorCelular" placeholder="Numero de celular" readonly
                            value="{{ ($alumno->alumnoTutorCelular) }}">
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Email</label>
                        <input
                            class="appearance-none w-full p-4 font-semibold leading-none bg-grey-50 read-only:bg-grey-200 rounded-full outline-none"
                            type="text" name="alumnoTutorEmail" placeholder="Email" readonly
                            value="{{ ($alumno->alumnoTutorEmail) }}">
                    </div>

                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Numero de telefono</label>
                        <input
                            class="appearance-none w-full p-4 font-semibold leading-none bg-grey-50 read-only:bg-grey-200 rounded-full outline-none"
                            type="number" name="alumnoTutorTelefono" placeholder="Numero de telefono" readonly
                            value="{{ ($alumno->alumnoTutorTelefono) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
