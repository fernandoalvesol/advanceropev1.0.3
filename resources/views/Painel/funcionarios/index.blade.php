@extends('layouts.blank')
@section('main_container')
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    @if (Auth::user()->isadmin)
                        <h2><img  width="50" height="50" src="/img/employee.svg"></span>Funcionários <small>Listagem</small></h2>
                    @else
                        <h2><img  width="50" height="50" src="/img/employee.svg"></span>Meus Dados <small>Listagem</small></h2>
                    @endif
                    <div class="clearfix"></div>                        
                </div>


                {{-- <form action="/searchFuncionarios" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="dica"
                            placeholder="Digite para Pesquisar..."> <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form> --}}

            @if (Auth::user()->isadmin)
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('funcionarios.create') }}"> Novo </a>
            </div>
            @endif
    
            <div class="x_content">        
                <table class="table table-hover">
                    <thead>
                        <tr class="headings">                            
                            <th class="column-title" width="10%">Código </th>
                            <th class="column-title" width="30%">Nome</th>
                            <th class="column-title" width="20%">Telefone</th>
                            <th class="column-title" width="20%">Celular</th>
                            <th class="column-title no-link last" width="20%" style="text-align: left">
                                <span class="nobr">Ações</span>                              
                            </th>                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($funcionarios as $funcionario)
                        <tr classe="ever-point">
                            <td>{{$funcionario->RECNO}}</td>
                            <td>{{$funcionario->NOME}}</td>                    
                            <td>{{$funcionario->TELEFONE}}</td> 
                            <td>{{$funcionario->CELULAR}}</td>                    
                            <td>
                                <a class="btn btn-info" title="Visualizar Registro" href="{{ route('funcionarios.show',$funcionario->RECNO) }}"><span class="glyphicon glyphicon-eye-open"></span></a>

                                {{-- <a class="btn btn-success" title="Download do PDF" data-toggle="modal" data-target="#ModalSelectMes"><span class="glyphicon glyphicon-download"></span></a> --}}
                                <a class="btn btn-success" title="Download do PDF" onClick="ajxContraCheques({{$funcionario->RECNO}})"><span class="glyphicon glyphicon-download"></span></a>

                                @if (Auth::user()->isadmin)
                                
                                <a class="btn btn-primary" href="{{ route('funcionarios.edit',$funcionario->RECNO) }}"><span class="glyphicon glyphicon-edit" title="Editar"></span></a>
                                
                                {!! Form::open(['method' => 'DELETE','route' => ['funcionarios.destroy', $funcionario->RECNO],'style'=>'display:inline']) !!}                                                               

                                {!! 

                                    Form::button('<span class="glyphicon glyphicon-remove">', [

                                    'class' => 'btn btn-danger','data-toggle'=>'confirmation','data-placement'=>'left', 'data-singleton'=>'true',
                                    'data-title'=>'Deseja Realmente Excluir ?',
                                    'data-btn-cancel-label'=>'Não', 'data-btn-ok-label'=>'Sim' ]) 

                                !!} 
                                
                                @endif

                                {!! Form::close() !!}
                            </td>                    
                        </tr>
                        @endforeach                
                    </tbody>
                </table>
                {{ $funcionarios->links() }}         
            </div>
        </div>
    </div>
</div>

<!-- div para selecionar o mes do contra cheque -->
<div class="modal fade" id="ModalSelectMes" role="dialog" aria-labelledby="ModalSelectMes" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Selecione</h5>
          <button type="button" style="display: none;" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" role="search">
                {{ csrf_field() }}            
                <div class="table-responsive" id="resultAjax">
                        
                </div>
            </form>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" >Cancelar</button>
        </div>
      </div>
    </div>
  </div>
        
    
@endsection