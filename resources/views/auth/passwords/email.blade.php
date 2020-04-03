<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Advance Rope | </title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div class="text-center">

                            <img src="{{url('/assets/portal/images/logomarca.png')}}" class="img-logo">							

                        </div>
                        {!! BootForm::open(['url' => url('/password/email'), 'method' => 'post']) !!}
                        <h1>Recuperar Senha</h1>

                        <h1>Entrar em Contato com a Administração</h1>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Se Você tem a Senha ?
                                <a href="{{ url('/login') }}" class="to_register"> Entrar </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                        </div>

                        {!! BootForm::close() !!}
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>