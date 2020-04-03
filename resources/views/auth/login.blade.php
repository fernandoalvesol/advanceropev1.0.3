<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ContraCheque Fácil </title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/portal/css/reset.css')}}">

</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">

				<div class="text-center">
					
					<img src="{{url('/assets/portal/images/logomarca.png')}}" class="img-logo">							
										
				</div>
			
            <section class="login_content">
				
				{!! BootForm::open(['url' => url('/login'), 'method' => 'post']) !!}				
                    
				<h1>ContraCheque Fácil</h1>
			
				{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Digite Seu Email', 'afterInput' => '<span>test</span>'] ) !!}
			
				{!! BootForm::password('password', 'Password', ['placeholder' => 'Password']) !!}
				
				<div>
                                    {!! BootForm::submit('Entrar', ['class' => 'btn btn-default submit']) !!}<br>
					<a class="reset_pass" href="{{  url('/password/reset') }}">Esqueceu sua Senha ?</a>
				</div>
                    
				<div class="clearfix"></div>
                    				
				{!! BootForm::close() !!}
            </section>
        </div>
    </div>
</div>
</body>
</html>