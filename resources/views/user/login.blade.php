<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
        <title> Login | Investindo</title>


    </head>
    <body>

        <div class="background"></div>

        <section id="conteudo-view" class="login">

            <h1>Investindo</h1>
            <h3>O nosso gerenciador de investimentos</h3>
            {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
                <p>Acesse o sistema</p>

                <label for=""> 
                    {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário"]) !!}
                </label>
                <label for="">
                    
                    {!! Form::password('password', ['placeholder' => 'Senha']) !!}
                    
                </label>

                
                {!! Form::submit('Entrar') !!}
                
            {!! Form::close() !!}
            
            <form class="" action="index.html" method="POST"></form>
        </section>
    </body>
</html>
