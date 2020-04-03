@extends('layouts.blank')
 
@section('main_container')

    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">                    
                    <h2><img  width="50" height="50" src="/img/employee.svg">Funcionário <small>Editar</small></h2>
                    <div class="clearfix"></div>
                </div>                

                {!! Form::model($funcionario, ['method' => 'PATCH','route' => ['funcionarios.update', $funcionario->RECNO]]) !!}
                    @include('Painel.funcionarios.form')
                {!! Form::close() !!}

            </div>
        </div>


    
    </div>

@endsection