<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title', 'Sabor do Brasil')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
        
    <main>
        
            @yield('content')

    </main>


    <footer class="container-fluid text-center mt-20 py-3 border-top">
        <div class="d-flex flex-wrap justify-content-between align-items-center">
            <h6 class="mt-2">Sabor do Brasil</h6>
            <div class="ml-3">
                <img class="mr-3" src="{{ asset('instagram.svg') }}" alt="">
                <img class="mr-3" src="{{ asset('twitter.svg') }}" alt="">
                <img class="mr-3" src="{{ asset('whatsapp.svg') }}" alt="">
                <img class="mr-3" src="{{ asset('globe.svg') }}" alt="">
            </div>
            <h6 class="mt-2">&copy; Copyright - 2025</h6>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
