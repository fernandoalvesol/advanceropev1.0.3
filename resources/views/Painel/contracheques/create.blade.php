@extends('layouts.blank')

@section('main_container')

    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><img  width="50" height="50" src="/img/file.svg">Contra Cheque <small>Upload de Arquivo PDF</small></h2>
                    <div class="clearfix"></div>                        
                </div>                                   
                                                
                {!! Form::open(['action'=>'Painel\ContraChequeController@store', 'files' => true]) !!}

                    {{ csrf_field() }}                    
                    
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">                
                        <label for="ARQUIVO">Escolha um Arquivo<span class="required">*</span></label>
                        <input name="ARQUIVO" type="file" accept=".pdf,.PDF" required/>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">                        
                        <label for="FUNCIONARIO">Funcionário<span class="required">*</span></label>
                        <select id="FUNCIONARIO" class="form-control" name="FUNCIONARIO" required>
                            <option value="">Escolha...</option>
                            @foreach($funcionarios as $fun)                            
                            <option value="{{$fun->RECNO}}">{{$fun->NOME}}</option>
                            @endForeach 
                        </select>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="MES">Mês<span class="required">*</span></label>
                        {!! Form::select('MES', [
                            '' => 'Selecione', 
                            '01' => 'JANEIRO',
                            '02' => 'FEVEREIRO',
                            '03' => 'MARÇO',
                            '04' => 'ABRIL',
                            '05' => 'MAIO',
                            '06' => 'JUNHO',
                            '07' => 'JULHO',
                            '08' => 'AGOSTO',
                            '09' => 'SETEMBRO',
                            '10' => 'OUTUBRO',
                            '11' => 'NOVEMBRO',
                            '12' => 'DEZEMBRO'
                        ], null, 
                        array('class' => 'form-control','id' => 'MES', 'required' => 'required')) !!}
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="ANO">Ano<span class="required">*</span></label>
                        {!! Form::select('ANO', [
                            '' => 'Selecione', 
                            '2018' => '2018',
                            '2019' => '2019',
                            '2020' => '2020',
                            '2021' => '2021',
                            '2022' => '2022',
                            '2023' => '2023',
                            '2024' => '2024',
                            '2025' => '2025'
                        ], null, 
                        array('class' => 'form-control','id' => 'ANO', 'required' => 'required')) !!}
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <input type="button" value="Voltar" class="btn btn-primary" onclick="window.history.back()" />
                    </div>

                </form>
                
                
            </div>                
        </div>
    </div>        

@endsection