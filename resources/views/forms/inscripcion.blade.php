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

            {{--<div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
                <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
            </div>
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
            </div>
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
            </div>
            <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
                <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
            </div>
            <div class="p-4 mb-4 text-sm text-grey-700 bg-grey-100 rounded-lg dark:bg-grey-700 dark:text-grey-300" role="alert">
                <span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
            </div>--}}

            @if($errors->any())

                @foreach($errors->all() as $error)
                    <div class="p-4 mb-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                         role="alert">
                        <div><span class="font-medium">{{ $error }}!</span></div>
                    </div>
                @endforeach
            @endif

            <form action="{{ url('registrar') }}" class="mb-8 px-4" method="post">
                @csrf
                <h2 class="text-4xl ml-2 mb-2 leading-tight font-bold font-heading mt-4">Datos del Alumno</h2>
                <div>
                    <div class="flex flex-wrap rounded p-2">
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Apellido Paterno</label>
                                @if ($errors->has('alumnoApellidoPaterno'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoApellidoPaterno') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="text" name="alumnoApellidoPaterno" placeholder="Ingresa Apellido Paterno"
                                    value="{{ old('alumnoApellidoPaterno') }}"></div>

                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Curp</label>
                                @if ($errors->has('alumnoCurp'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoCurp') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="text" name="alumnoCurp" placeholder="Ingresa Curp"
                                    value="{{ old('alumnoCurp') }}"></div>

                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Numero de celular</label>
                                @if ($errors->has('alumnoCelular'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoCelular') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="text" name="alumnoCelular" placeholder="Ingresa Numero Celular"
                                    value="{{ old('alumnoCelular') }}"></div>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Apellido Materno</label>
                                @if ($errors->has('alumnoApellidoMaterno'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoApellidoMaterno') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="text" name="alumnoApellidoMaterno" placeholder="Ingresa Apellido Materno"
                                    value="{{ old('alumnoApellidoMaterno') }}"></div>

                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Fecha de
                                    nacimiento </label>
                                @if ($errors->has('alumnoFechaNacimiento'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoFechaNacimiento') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="date" id="alumnoFechaNacimiento" name="alumnoFechaNacimiento"
                                    value="{{ old('alumnoFechaNacimiento') }}"></div>
                            {{--<script>
                                function obo()
                                {
                                    alert(document.getElementById("alumnoFechaNacimiento").value);
                                }
                            </script>--}}
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Año al que ingresa</label>
                                @if ($errors->has('alumnoAnoIngreso'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoAnoIngreso') }}</span>
                                    </div>
                                @endif
                                <div class="relative">
                                    <select
                                        class="appearance-none w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                        name="alumnoAnoIngreso">
                                        <option class="mb-2 mt" value="">Seleccione opción</option>
                                        <option class="mb-2 mt"
                                                value="1" {{ old('alumnoAnoIngreso') == '1' ? 'selected' : '' }}>Primero
                                            de secundaria
                                        </option>
                                        <option class="mb-2 mt"
                                                value="2" {{ old('alumnoAnoIngreso') == '2' ? 'selected' : '' }}>Segundo
                                            de secundaria
                                        </option>
                                        <option class="mb-2 mt"
                                                value="3" {{ old('alumnoAnoIngreso') == '3' ? 'selected' : '' }}>Tercero
                                            de secundaria
                                        </option>
                                        <option class="mb-2 mt"
                                                value="4" {{ old('alumnoAnoIngreso') == '4' ? 'selected' : '' }}>Primero
                                            de preparatoria
                                        </option>
                                        <option class="mb-2 mt"
                                                value="5" {{ old('alumnoAnoIngreso') == '5' ? 'selected' : '' }}>Segundo
                                            de preparatoria
                                        </option>
                                        <option class="mb-2 mt"
                                                value="6" {{ old('alumnoAnoIngreso') == '6' ? 'selected' : '' }}>Tercero
                                            de preparatoria
                                        </option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewbox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Nombre(s)</label>
                                @if ($errors->has('alumnoNombre'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoNombre') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="text" name="alumnoNombre" placeholder="Ingresa Nombre del Alumno"
                                    value="{{ old('alumnoNombre') }}"></div>

                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Email</label>
                                @if ($errors->has('alumnoEmail'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoEmail') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="text" name="alumnoEmail" placeholder="Ingresa Email del Alumno"
                                    value="{{ old('alumnoEmail') }}"></div>
                        </div>
                        <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Escuela de
                                    procedencia</label>
                                @if ($errors->has('alumnoProcedencia'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoProcedencia') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="text" name="alumnoProcedencia" placeholder="Ingresa Escuela de Procedencia"
                                    value="{{ old('alumnoProcedencia') }}"></div>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Promedio</label>
                                @if ($errors->has('alumnoPromedio'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoPromedio') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                                    type="text" name="alumnoPromedio" min="0" max="10" placeholder="Promedio"
                                    value="{{ old('alumnoPromedio') }}"></div>
                        </div>
                    </div>
                </div>

                <h2 class="text-4xl mb-2 leading-tight font-bold font-heading">Domicilio </h2>
                <div class="pt-6 rounded px-4">
                    <div class="mb-6">
                        <label class="block text-grey-800 font-semibold mb-2" for="">Calle</label>
                        @if ($errors->has('alumnoDomicilioCalle'))
                            <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center" role="alert">
                                <span>{{ $errors->first('alumnoDomicilioCalle') }}</span>
                            </div>
                        @endif
                        <input
                            class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 outline-none rounded-full"
                            type="text" name="alumnoDomicilioCalle" placeholder="Calle"
                            value="{{ old('alumnoDomicilioCalle') }}"></div>

                    <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Municipio</label>
                                @if ($errors->has('alumnoDomicilioMunicipio'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoDomicilioMunicipio') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoDomicilioMunicipio" placeholder="Municipio"
                                    value="{{ old('alumnoDomicilioMunicipio') }}"></div>
                        </div>
                        <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Localidad</label>
                                @if ($errors->has('alumnoDomicilioLocalidad'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoDomicilioLocalidad') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoDomicilioLocalidad" placeholder="Localidad"
                                    value="{{ old('alumnoDomicilioLocalidad') }}"></div>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                        <div class="w-full md:w-2/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Colonia</label>
                                @if ($errors->has('alumnoDomicilioColonia'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoDomicilioColonia') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoDomicilioColonia" placeholder="Colonia"
                                    value="{{ old('alumnoDomicilioColonia') }}"></div>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Codigo Postal</label>
                                @if ($errors->has('alumnoDomicilioCP'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoDomicilioCP') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoDomicilioCP" placeholder="Codigo Postal"
                                    value="{{ old('alumnoDomicilioCP') }}"></div>
                        </div>
                    </div>
                </div>

                <h2 class="text-4xl mb-2 leading-tight font-bold font-heading mt-4">Datos del(la) tutor(a)</h2>
                <div class="rounded px-4">
                    <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Apellido paterno</label>
                                @if ($errors->has('alumnoTutorApellidoPaterno'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoTutorApellidoPaterno') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoTutorApellidoPaterno" placeholder="Apellido paterno"
                                    value="{{ old('alumnoTutorApellidoPaterno') }}"></div>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Apellido materno</label>
                                @if ($errors->has('alumnoTutorApellidoMaterno'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoTutorApellidoMaterno') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoTutorApellidoMaterno" placeholder="Apellido materno"
                                    value="{{ old('alumnoTutorApellidoMaterno') }}"></div>
                        </div>
                        <div class="w-full md:w-1/3 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Nombre(s)</label>
                                @if ($errors->has('alumnoTutorNombre'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoTutorNombre') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoTutorNombre" placeholder="Nombre(s)"
                                    value="{{ old('alumnoTutorNombre') }}"></div>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
                        <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Ocupacion</label>
                                @if ($errors->has('alumnoTutorOcupacion'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoTutorOcupacion') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoTutorOcupacion" placeholder="Ocupacion"
                                    value="{{ old('alumnoTutorOcupacion') }}"></div>

                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Numero de celular</label>
                                @if ($errors->has('alumnoTutorCelular'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoTutorCelular') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none capitalize w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoTutorCelular" placeholder="Numero de celular"
                                    value="{{ old('alumnoTutorCelular') }}"></div>
                        </div>
                        <div class="w-full md:w-1/2 px-4 mb-4 md:mb-0">
                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Email</label>
                                @if ($errors->has('alumnoTutorEmail'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoTutorEmail') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="text" name="alumnoTutorEmail" placeholder="Email"
                                    value="{{ old('alumnoTutorEmail') }}"></div>

                            <div class="mb-6">
                                <label class="block text-grey-800 font-semibold mb-2" for="">Numero de telefono</label>
                                @if ($errors->has('alumnoTutorTelefono'))
                                    <div class="rounded alert text-red-500 alert-danger bg-white mb-2 text-center"
                                         role="alert">
                                        <span>{{ $errors->first('alumnoTutorTelefono') }}</span>
                                    </div>
                                @endif
                                <input
                                    class="appearance-none w-full p-4 font-semibold leading-none bg-grey-50 rounded-full outline-none"
                                    type="number" name="alumnoTutorTelefono" placeholder="Numero de telefono"
                                    value="{{ old('alumnoTutorTelefono') }}"></div>
                        </div>
                    </div>
                    <button type="submit"
                            class="flex text-deep-orange-500-contrast bg-deep-orange-500 hover:bg-deep-orange-700-accent rounded-lg px-5 py-2.5 text-center mt-2 mb-4">
                        Registrar Alumno
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-deep-orange-500-contrast"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
