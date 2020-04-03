@extends('layouts.blank')
@section('main_container')
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><img  width="50" height="50" src="/img/file.svg"></span>Contra Cheque <small>Listagem</small></h2>
                    <div class="clearfix"></div>                        
                </div>       

    <div class="pull-left">
        <a class="btn btn-success" href="{{ route('contracheques.create') }}"> Novo </a>
    </div>
    
    <div class="x_content">        
            <table class="table table-hover">
                <thead>
                    <tr class="headings">                            
                        <th class="column-title" width="10%">Código </th>
                        <th class="column-title" width="45%">Funcionário</th>
                        <th class="column-title" width="15%">Mês</th> 
                        <th class="column-title" width="15%">Ano</th>                                               
                        <th class="column-title no-link last" width="25%" style="text-align: left">
                            <span class="nobr">Ações</span>                              
                        </th>                            
                    </tr>
                </thead>
                <tbody>
                    @foreach($contracheques as $contracheque)
                    <tr classe="ever-point">
                        <td>{{$contracheque->RECNO}}</td>
                        <td>{{$contracheque->NOME}}</td>                                                                    
                        <td>
                            @php

                            switch($contracheque->MES){
                                case("1"):
                                    echo "JANEIRO";
                                    break;                                                                
                                case("2"):
                                    echo "FEVEREIRO";                                      
                                    break;
                                case("3"):
                                    echo "MARÇO";                                    
                                    break;
                                case("4"):
                                    echo "ABRIL";                                    
                                    break;
                                case("5"):
                                    echo "MAIO";                                       
                                    break;
                                case("6"):
                                    echo "JUNHO";                                     
                                    break;
                                case("7"):
                                    echo "JULHO";                                     
                                    break;
                                case("8"):
                                    echo "AGOSTO";                                     
                                    break;
                                case("9"):
                                    echo "SETEMBRO";                                       
                                    break;
                                case("10"):
                                    echo "OUTUBRO";                                    
                                    break;
                                case("11"):
                                    echo "NOVEMBRO";
                                    break;
                                case("12"):
                                    echo "DEZEMBRO";                                    
                                    break;
                                default:
                                    echo "--";                                                                            
                                    break;
                            }
                        
                            @endphp
                        </td>
                        <td>{{$contracheque->ANO}}</td>  
                        
                        <td>
                                
                            <a class="btn btn-success" title="Download do PDF" href="{{ route('downloadPDF', ['id' => $contracheque->RECNO]) }}"><span class="glyphicon glyphicon-download"></span></a>

                            {!! Form::open(['method' => 'DELETE','route' => ['contracheques.destroy', $contracheque->RECNO],'style'=>'display:inline']) !!}                                                               

                            {!! 

                                Form::button('<span class="glyphicon glyphicon-remove">', [

                                'class' => 'btn btn-danger','data-toggle'=>'confirmation','data-placement'=>'left', 'data-singleton'=>'true',
                                'data-title'=>'Deseja Realmente Excluir ?',
                                'data-btn-cancel-label'=>'Não', 'data-btn-ok-label'=>'Sim' ]) 

                            !!}                                                         

                            {!! Form::close() !!}
                        </td>                    
                    </tr>
                    @endforeach                
                </tbody>
            </table>
            {{ $contracheques->links() }}         
    </div>
</div>
</div>
</div>
        
    
@endsection