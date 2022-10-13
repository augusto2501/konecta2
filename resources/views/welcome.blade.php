<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Konecta</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    <style>

        body {
            margin: auto;
            width: 640px;
            padding: 50px;
            font-family: 'Avenir', sans-serif;
        }

        /* Centered Image Code */

        .container {
            height: 500px;
            position: relative;

        }

        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        img{
            width: 400px;
        }
        h1{
            text-align:center;
        }

    </style>

    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="container">
                <div class="center">
                    <a href="{{ route('products.index') }}">
                        <img src="https://agenciapublicadeempleo.sena.edu.co/imgLayout/Logo%20konecta%202.png" alt="">
                    </a>
                    <h1>Inventario Cafetería</h1>
                </div>
            </div>

        </div>

    </body>
</html>
