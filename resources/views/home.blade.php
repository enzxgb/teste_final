<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <title>Sabor do Brasil</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">

        <!-- COLUNA EMPRESA -->
            <div class="col-md-3 text-center py-4 mt-3">
                <img class="rounded-circle img-fluid" src="{{ asset($empresa->logo) }}" alt="Sabor do Brasil">
                <p class="h2 mt-4 ">{{ $empresa->nome }}</p>
                <hr style="border-top: 3px solid #000; border-color: #D97014; width: 70%">
                <div class="d-flex justify-content-center">
                    <p class="h5 mr-5">29<br>Quantidade <br> Likes</p>
                    <p class="h5 ml-5">12<br>Quantidade<br>Dislikes</p>
                </div>
            </div>

        <!-- COLUNA CENTRAL -->

            <div class="col-md-6 py-4 border-left bg-light border-right">

        <!-- HEADER PUBLICAÇÕES -->
                <div>
                    <p class="h1 text-center font-weight-bold">PUBLICAÇÕES</p>
                    <hr style="border-top: 3px solid #000; border-color: #D97014;">
                </div>

        <!-- PUBLICAÇÕES -->
                @foreach ($publicacoes as $publicacao)
                <div class="card p-3">
                    <p class="h3">{{ $publicacao->titulo_prato }}</p>
                    <div class="text-center">
                        <img src="{{ asset($publicacao->foto) }}" alt="" class="img-fluid">
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <p class="h5 align-content-start" >{{ $publicacao->local }}</p>
                        <p class="h5 align-content-end">{{ $publicacao->cidade }}</p>
                    </div>
                    <div class="d-flex" >
                        <img src="{{ asset('flecha_cima_vazia.svg') }}" alt="like">
                        <p class="h3 mt-2 ml-2">1000</p>
                        <img src="{{ asset('flecha_baixo_vazia.svg') }}" alt="dislike" class="ml-4">
                        <p class="h3 mt-2 ml-2">1</p>
                        <div class="d-flex img-fluid" style="margin-left: auto;">
                            <img src="{{ asset('chat.svg') }}" alt="chat" class="ml-4">
                            <p class="h3 mt-2 ml-2">4</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        <!-- COLUNA DIREITA -->

            <div class="col-md-3 d-flex flex-column align-items-center justify-content-start py-4">
                <button id="botaoEntrar">Entrar</button>
                    <dialog id="modalLogin">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <h1 class="text-center" style="color: orange;">Login</h1>
                            <!-- Email Address -->
                            <div>
                                <x-text-input id="email" placeholder="Digite seu e-mail" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-text-input id="password" placeholder="Digite sua senha" class="block mt-1 w-full form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                                <div class="d-flex">
                                    <button id="botaoCancelar">Cancelar</button>
                                    <x-primary-button id="botaoLogin">
                                        {{ __('Entrar') }}
                                    </x-primary-button>
                                </div>
                            </div>
                        </form>
                    </dialog>
                <script src=" {{ asset('js/home.js') }}"></script>
            </div>
        </div>
    </div>
</body>
</html>
