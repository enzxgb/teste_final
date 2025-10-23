<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">

        <!-- EMPRESA -->
            <div class="col-md-3 text-center py-4 mt-3">
                <img src="{{ asset($empresa->logo) }}" alt="Sabor do Brasil">
                <p class="h2 mt-4">Sabor do Brasil</p>
                <hr style="border-top: 3px solid #000; border-color: #D97014; width: 70%">
                <div class="d-flex d-flex justify-content-center">
                    <p class="mr-5 h5">9<br>Quantidade <br> Likes</p>
                    <p class="h5">12<br>Quantidade<br>Dislikes</p>
                </div>
            </div>
            
            <div class="col-md-6 py-4 border-left bg-light border-right">
                <div>
                    <p class="h1 text-center font-weight-bold">PUBLICAÇÕES</p>
                    <hr style="border-top: 3px solid #000; border-color: #D97014;">
                </div>
                <div>
                    <p>Título do Prato 01</p>
                    @foreach ($publicacoes as $publicacao )
                    <img src="{{ asset($publicacao->foto) }}" alt="">
                    @endforeach
                    <div>
                        <p>Local 01</p>
                        <p>Maceio - AL</p>
                    </div>
                    <div>
                        <img src="" alt="">
                        <img src="" alt="">
                        <div>
                            <img src="" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-start py-4">
            
            </div>
        </div>
    </div>
</body>
</html>