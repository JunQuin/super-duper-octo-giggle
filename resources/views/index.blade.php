<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.css') }}"></script>
</head>
<body class="antialiased bg-body text-body font-body">
<div class="">

    <section class="skewed-bottom-right"><div class="bg-gray-50 pt-20 pb-20 radius-for-skewed">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-20 lg:mb-0 flex items-center">
                        <div class="w-full text-center lg:text-left">
                            <div class="max-w-md mx-auto lg:mx-0">
                                <h2 class="mb-3 text-4xl lg:text-5xl font-bold font-heading">
                                    <span>Inscripción y reinscripción</span>
                                    <span class="text-green-600">problems</span>
                                </h2>
                            </div>
                            <div class="max-w-sm mx-auto lg:mx-0">
                                <p class="mb-6 text-gray-400 leading-loose">Mas texto para poner</p>
                                <div>
                                    <a class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-green-600 hover:bg-green-700 text-white font-semibold rounded-l-xl rounded-t-xl transition duration-200" href="{{ route('inscripcion') }}">Inscripción </a>
                                    <a class="inline-block w-full lg:w-auto py-2 px-6 leading-loose font-semibold bg-white hover:bg-gray-50 rounded-l-xl rounded-t-xl transition duration-200" href="{{ route('reinscripcion') }}">Reinscripción </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 flex items-center justify-center">
                        <img src="images/inei.jpg" alt=""></div>swm
                </div>
            </div>
        </div>
        <div class="mr-for-radius">
            <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewbox="0 0 10 10" preserveaspectratio="none"><polygon fill="currentColor" points="0 0 10 0 0 10"></polygon></svg></div>
        <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        </div>
    </section>
</div>
</body>
</html>

