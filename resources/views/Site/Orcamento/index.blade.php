@extends('Site.Template.tema')

@section('main_container')

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area fundo-topo-contato">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="{{url('/')}}">
                                <!-- Uncomment below if you prefer to use an image logo -->
                                <img src="{{url('assets/portal/images/logo_advance.png')}}" alt="" title="">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{url('/')}}">Sobre</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{url('/')}}">Serviços</a>
                                </li>                                       
                                <li>
                                    <a class="page-scroll" href="{{url('/')}}">Galeria</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{url('/')}}">Clientes</a>
                                </li>                                        

                                <li>
                                    <a class="page-scroll" href="{{url('/contato')}}">Contato</a>
                                </li>
                                <li>
                                    <a class="page-scroll" target="_blank" href="{{url('/painel')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a class="page-scroll" target="_blank" href="https://h38.servidorhh.com:2096/logout/?locale=pt_br"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>                               

                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
</header>

<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row topo-contato">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>ORÇAMENTO</h2>
                    </div>
                </div>
            </div>
            <div class="row line-contato">
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                Fone: +55 (81) 99812.9994<br>
                                <span>Atendimento</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email: sac@advancerope.com.br<br>
                                <span>Web: www.advancerope.com.br</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Vila Bom Tempo, nº 23 - Quadra H<br>
                                <span>Goiana / PE. CEP.: 55.900-000</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Google Map -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Map -->
                    <div class="mapa-google">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.109769706431!2d-35.01533685022343!3d-7.563009576759702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab629446f09af7%3A0xec198b12690cf38!2sPSF+BOM+TEMPO!5e0!3m2!1spt-BR!2sbr!4v1562615775339!5m2!1spt-BR!2sbr" width="450" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>                              
                    </div>
                    <!-- End Map -->
                </div>
                <!-- End Google Map -->

                <!-- Start  contact -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form contact-form">

                        @if( Session::has('success') )
                        <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
                            {{Session::get('success')}}
                        </div>
                        @endif

                        @if( isset($errors) && count($errors) > 0)

                        <div class="alert alert-warning">
                            @foreach($errors->all() as $error)

                            <p>{{$error}}</p>
                            @endforeach

                        </div>

                        @endif

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>

                        {!! Form::open(['url' => 'enviacontato', 'class' => 'form-search form-ds', 'method' => 'post'])!!}

                        <div class="form-group">

                            <div class="form-group">
                                {!! Form::text('name', null, ['placeholder' => 'Seu Nome:', 'class' => 'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::email('email', null, ['placeholder' => 'Seu E-mail:', 'class' => 'form-control'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('telefone', null, ['placeholder' => 'Seu Telefone:', 'class' => 'form-control'])!!}

                            </div>
                            <div class="form-group">
                                {!! Form::text('subject', null, ['placeholder' => 'Assunto:', 'class' => 'form-control'])!!}

                            </div>

                            <div class="form-group">

                                {!! Form:: textarea('descricao', null, ['placeholder' => 'Descrição:', 'class' => 'form-control'])!!}

                            </div>

                        </div>
                        <div class="form-group">
                            <button class="btn-contato"> Enviar</button>
                        </div>
                        {!! Form::close()!!}
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>



@endsection