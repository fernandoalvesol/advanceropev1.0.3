@extends('layouts.blank')
 
@section('main_container')

    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">                    
                    <h2><img  width="50" height="50" src="/img/employee.svg"></span>Funcionário <small>Detalhes</small></h2>
                    <div class="clearfix"></div>
                </div>                
                <div class="row">    
                    <div class="row">
    
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                            <div class="form-group">
                                <strong>Código</strong><br>
                                
                                <span class="badge badge-info">{!! $funcionario->RECNO !!}</span>
                            </div>
                        </div>

                        <div class="col-md-10 col-sm-12 col-xs-12 form-group">
                            <div class="form-group">
                                <strong>Perfil</strong><br> 
                                
                                <span class="badge badge-info">{{ $isAdmin ? 'Administrador' : 'Usuário Comum' }}</span>
                            </div>
                        </div>
                        
                        <div class="col-md-5 col-sm-12 col-xs-12 form-group">                
                            <label for="NOME">Nome<span class="required">*</span></label>
                            {!! Form::text('NOME', $funcionario->NOME, array('class' => 'form-control', 'id' => 'NOME', 'name' => 'NOME', 'required' => 'required', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                            <label for="APELIDO">Apelido</label>
                            {!! Form::text('APELIDO', $funcionario->APELIDO, array('class' => 'form-control', 'id' => 'APELIDO', 'name' => 'APELIDO', 'disabled' => 'disabled')) !!}            
                        </div>

                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">                
                                <label for="DATA_ADMISSAO">Data Admissão</label>
                                {!! Form::text('DATA_ADMISSAO', $funcionario->DATA_ADMISSAO, array('class' => 'form-control', 'id' => 'DATA_ADMISSAO', 'name' => 'DATA_ADMISSAO', 'disabled' => 'disabled')) !!}            
                            </div>
                    
                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">                
                            <label for="DATA_NASCIMENTO">Data Nascimento</label>
                            {!! Form::text('DATA_NASCIMENTO', $funcionario->DATA_NASCIMENTO, array('class' => 'form-control', 'id' => 'DATA_NASCIMENTO', 'name' => 'DATA_NASCIMENTO', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">                
                            <label for="CPF">CPF<span class="required">*</span></label>
                            {!! Form::text('CPF', $funcionario->CPF, array('class' => 'form-control', 'id' => 'CPF', 'name' => 'CPF', 'required' => 'required', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">                
                            <label for="RG">RG</label>
                            {!! Form::text('RG', $funcionario->RG, array('class' => 'form-control', 'id' => 'RG', 'name' => 'RG', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-5 col-sm-12 col-xs-12 form-group">                
                            <label for="ENDERECO">Endereço</label>
                            {!! Form::text('ENDERECO', $funcionario->ENDERECO, array('class' => 'form-control', 'id' => 'ENDERECO', 'name' => 'ENDERECO', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">                
                            <label for="NUMERO">Número</label>
                            {!! Form::number('NUMERO', $funcionario->NUMERO, array('class' => 'form-control', 'id' => 'NUMERO', 'name' => 'NUMERO', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                            <label for="COMPLEMENTO">Complemento</label>
                            {!! Form::text('COMPLEMENTO', $funcionario->COMPLEMENTO, array('class' => 'form-control', 'id' => 'COMPLEMENTO', 'name' => 'COMPLEMENTO', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                            <label for="PONTO_REFERENCIA">Ponto de Referência</label>
                            {!! Form::text('PONTO_REFERENCIA', $funcionario->PONTO_REFERENCIA, array('class' => 'form-control', 'id' => 'PONTO_REFERENCIA', 'name' => 'PONTO_REFERENCIA', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                            <label for="BAIRRO">Bairro</label>
                            {!! Form::text('BAIRRO', $funcionario->BAIRRO, array('class' => 'form-control', 'id' => 'BAIRRO', 'name' => 'BAIRRO', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                            <label for="CIDADE">Cidade</label>
                            {!! Form::text('CIDADE', $funcionario->CIDADE, array('class' => 'form-control', 'id' => 'CIDADE', 'name' => 'CIDADE', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                            <label for="UF">UF</label>
                            {!! Form::select('UF', [
                                '' => 'Selecione', 
                                'AC' => 'ACRE',
                                'AL' => 'ALAGOAS',
                                'AP' => 'AMAPÁ',
                                'AM' => 'AMAZONAS',
                                'BA' => 'BAHIA',
                                'CE' => 'CEARÁ',
                                'DF' => 'DISTRITO FEDERAL',
                                'ES' => 'ESPÍRITO SANTO',
                                'GO' => 'GOIÁS',
                                'MA' => 'MARANHÃO',
                                'MT' => 'MATO GROSSO',
                                'MS' => 'MATO GROSSO DO SUL',
                                'MG' => 'MINAS GERAIS',
                                'PA' => 'PARÁ',
                                'PB' => 'PARAÍBA',
                                'PR' => 'PARANÁ',
                                'PE' => 'PERNAMBUCO',
                                'PI' => 'PIAUÍ',
                                'RJ' => 'RIO DE JANEIRO',
                                'RS' => 'RIO GRANDE DO SUL',
                                'RN' => 'RIO GRANDE DO NORTE',
                                'RO' => 'RONDÔNIA',
                                'SC' => 'SANTA CATARINA',
                                'SP' => 'SÃO PAULO',
                                'SE' => 'SERGIPE',
                                'TO' => 'TOCANTINS',
                            ], $funcionario->UF, 
                            array('class' => 'form-control','id' => 'UF', 'disabled' => 'disabled')) !!}
                        </div>
                    
                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                            <label for="CEP">CEP</label>
                            {!! Form::text('CEP', $funcionario->CEP, array('class' => 'form-control', 'id' => 'CEP', 'name' => 'CEP', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">                
                            <label for="CELULAR">Celular</label>
                            {!! Form::text('CELULAR', $funcionario->CELULAR, array('class' => 'form-control', 'id' => 'CELULAR', 'name' => 'CELULAR', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">                
                            <label for="TELEFONE">Telefone Fixo</label>
                            {!! Form::text('TELEFONE', $funcionario->TELEFONE, array('class' => 'form-control', 'id' => 'TELEFONE', 'name' => 'TELEFONE', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">                
                            <label for="EMAIL">Email</label>
                            {!! Form::text('EMAIL', $funcionario->EMAIL, array('class' => 'form-control', 'id' => 'EMAIL', 'name' => 'EMAIL', 'disabled' => 'disabled')) !!}            
                        </div>
                    
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">                
                            <label for="INFORMACOES_ADICIONAIS">Informações Adicionais</label>
                            {{ Form::textarea('INFORMACOES_ADICIONAIS', $funcionario->INFORMACOES_ADICIONAIS, array('class' => 'form-control','size' => '50x3', 'disabled' => 'disabled')) }}
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">                            
                            <input type="button" value="Voltar" class="btn btn-primary" onclick="window.history.back()" />
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    

    @endsection

