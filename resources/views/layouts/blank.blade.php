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

        <link href="{{ asset("css/custom.css") }}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('assets/portal/css/reset.css')}}">


        <link href="{{ asset("css/bootstrap-datepicker.css") }}" rel="stylesheet">

        @stack('stylesheets')

    </head>

    <body class="nav-md">

        <div id="app">
            @include('Painel/flash/messages')


            @yield('content')
        </div>

        <div class="container body">
            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

                @include('includes/footer')

            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}"></script>

        <script src="{{ asset("js/bootstrap-datepicker.js") }}"></script>

        <script src="{{ asset("js/bootstrap-confirmation.min.js") }}"></script>

        <!-- funcoes diversas -->
        <script src="{{ asset("js/scripts.js") }}"></script>

        <script>
$(function () {
    $('#DATA_NASCIMENTO').datepicker({
        format: 'dd/mm/yyyy',
        lang: 'pt'
    });
    $('#DATA_ADMISSAO').datepicker({
        format: 'dd/mm/yyyy',
        lang: 'pt'
    });
});

$(document).ready(function () {
    $('[data-toggle=confirmation]').confirmation({
        rootSelector: '[data-toggle=confirmation]',
        onConfirm: function (event, element) {
            element.closest('form').submit();
        }
    });
});
        </script>

        @stack('scripts')

    </body>
</html>