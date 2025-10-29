@extends('layouts.app')
@section('title', 'Sabor do Brasil')
@section('content')
<body>
    <div class="container-fluid">
        <div class="row">

        <!-- COLUNA EMPRESA -->
            <div class="col-md-3 text-center py-4 mt-3">
                <img class="img-fluid" src="{{ asset($empresa->logo) }}" alt="Sabor do Brasil">
                <p class="h2 mt-4">{{ $empresa->nome }}</p>
                <hr style="border-top: 3px solid #000; border-color: #D97014; width: 70%">
                <div class="d-flex justify-content-center text-center">
                    <div class="mx-5">
                        <p class="h5 contagemLD">{{ $likesTotais }}</p>
                        <p class="h6">Quantidade <br> Likes</p>
                    </div>
                    <div class="mx-5">
                        <p class="h5 contagemLD">{{ $dislikesTotais }}</p>
                        <p class="h6">Quantidade <br> Dislikes</p>
                    </div>
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
                <div class="card p-3 mb-4 hover">
                    <p class="h3">{{ $publicacao->titulo_prato }}</p>
                    <div class="text-center">
                        <img src="{{ asset($publicacao->foto) }}" alt="" class="img-fluid">
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <p class="h5 align-content-start" >{{ $publicacao->local }}</p>
                        <p class="h5 align-content-end">{{ $publicacao->cidade }}</p>
                    </div>
                        @php
                            $liked = $publicacao->curtidas->where('user_id', auth()->id())->count() > 0;
                            $disliked = $publicacao->descurtidas->where('user_id', auth()->id())->count() > 0;
                        @endphp

                    <div class="d-flex" >
                        <form action="{{ route('publicacao.curtida', $publicacao->id) }}" method="post">
                        @csrf
                            <button type="submit" class="btn border-0 bg-transparent botaoLike" data-publicacao="{{ $publicacao->id }}">
                                <img src="{{ asset($liked ? '/flecha_cima_cheia.svg' : '/flecha_cima_vazia.svg') }}" alt="Like" class="mr-2">
                                {{ $publicacao->curtidas->count() }}
                            </button>
                        </form>

                        <form action="{{ route('publicacao.descurtida', $publicacao->id) }}" method="post">
                        @csrf
                            <button type="submit" class="btn border-0 bg-transparent botaoDislike" data-publicacao="{{ $publicacao->id }}">
                                <img src="{{ asset($disliked ? '/flecha_baixo_cheia.svg' : '/flecha_baixo_vazia.svg') }}" alt="Dislike" class="mr-2">
                                {{ $publicacao->descurtidas->count() }}
                            </button>
                        </form>

                        <form action="" method="post" style="margin-left: auto;">
                        @csrf
                            <button type="submit" class="btn border-0 bg-transparent botaoDislike" data-publicacao="{{ $publicacao->id }}">
                                <img src="{{ asset('chat.svg') }}" alt="chat" class="mr-3">
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach

                    <script>
                        const botoesLike = document.querySelectorAll('.botaoLike');
                        const botoesDislike = document.querySelectorAll('.botaoDislike');

                        botoesLike.forEach(botao => {
                            botao.addEventListener("click", function() {
                                event.preventDefault();
                                modalLogin.showModal();
                            });
                        });

                        botoesDislike.forEach(botao => {
                            botao.addEventListener("click", function() {
                                event.preventDefault();
                                modalLogin.showModal();
                            });
                        });
                    </script>
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
                                <div class="botoesLogin d-flex">
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
@endsection
