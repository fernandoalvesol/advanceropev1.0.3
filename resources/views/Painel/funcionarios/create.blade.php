@extends('layouts.blank')

@section('main_container')

    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><img  width="50" height="50" src="/img/employee.svg">Funcionário <small>Criar</small></h2>
                    <div class="clearfix"></div>                        
                </div>                                   
                
                {!! Form::open(['action'=>'Painel\FuncionarioController@store']) !!}
                    {{ csrf_field() }}                    
                    <div class="col-md-5 col-sm-12 col-xs-12 form-group">                
                        <label for="NOME">Nome<span class="required">*</span></label>
                        {!! Form::text('NOME', null, array('class' => 'form-control', 'id' => 'NOME', 'name' => 'NOME', 'required' => 'required')) !!}            
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="APELIDO">Apelido</label>
                        {!! Form::text('APELIDO', null, array('class' => 'form-control', 'id' => 'APELIDO', 'name' => 'APELIDO')) !!}            
                    </div>

                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">                
                            <label for="DATA_ADMISSAO">Data Admissão</label>
                            {!! Form::text('DATA_ADMISSAO', null, array('class' => 'form-control', 'id' => 'DATA_ADMISSAO', 'name' => 'DATA_ADMISSAO')) !!}            
                        </div>
                
                    <div class="col-md-2 col-sm-12 col-xs-12 form-group">                
                        <label for="DATA_NASCIMENTO">Data Nascimento</label>
                        {!! Form::text('DATA_NASCIMENTO', null, array('class' => 'form-control', 'id' => 'DATA_NASCIMENTO', 'name' => 'DATA_NASCIMENTO')) !!}            
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">                
                            <label for="ÉRFIL">PERFIL<span class="required">*</span></label>
                            {!! Form::select('PERFIL', [
                                '' => 'Selecione', 
                                '0' => 'Usuário Comum',
                                '1' => 'Administrador'
                            ], null, 
                            array('class' => 'form-control','id' => 'PERFIL')) !!}                   
                    </div>
                
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">                
                        <label for="CPF">CPF<span class="required">*</span></label>
                        {!! Form::text('CPF', null, array('class' => 'form-control', 'id' => 'CPF', 'name' => 'CPF', 'required' => 'required')) !!}            
                    </div>
                
                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">                
                        <label for="RG">RG</label>
                        {!! Form::text('RG', null, array('class' => 'form-control', 'id' => 'RG', 'name' => 'RG')) !!}            
                    </div>
                
                    <div class="col-md-5 col-sm-12 col-xs-12 form-group">                
                        <label for="ENDERECO">Endereço</label>
                        {!! Form::text('ENDERECO', null, array('class' => 'form-control', 'id' => 'ENDERECO', 'name' => 'ENDERECO')) !!}            
                    </div>
                
                    <div class="col-md-1 col-sm-12 col-xs-12 form-group">                
                        <label for="NUMERO">Número</label>
                        {!! Form::number('NUMERO', null, array('class' => 'form-control', 'id' => 'NUMERO', 'name' => 'NUMERO')) !!}            
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="COMPLEMENTO">Complemento</label>
                        {!! Form::text('COMPLEMENTO', null, array('class' => 'form-control', 'id' => 'COMPLEMENTO', 'name' => 'COMPLEMENTO')) !!}            
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="PONTO_REFERENCIA">Ponto de Referência</label>
                        {!! Form::text('PONTO_REFERENCIA', null, array('class' => 'form-control', 'id' => 'PONTO_REFERENCIA', 'name' => 'PONTO_REFERENCIA')) !!}            
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="BAIRRO">Bairro</label>
                        {!! Form::text('BAIRRO', null, array('class' => 'form-control', 'id' => 'BAIRRO', 'name' => 'BAIRRO')) !!}            
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="CIDADE">Cidade</label>
                        {!! Form::text('CIDADE', null, array('class' => 'form-control', 'id' => 'CIDADE', 'name' => 'CIDADE')) !!}            
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
                        ], null, 
                        array('class' => 'form-control','id' => 'UF')) !!}
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="CEP">CEP</label>
                        {!! Form::text('CEP', null, array('class' => 'form-control', 'id' => 'CEP', 'name' => 'CEP')) !!}            
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="CELULAR">Celular</label>
                        {!! Form::text('CELULAR', null, array('class' => 'form-control', 'id' => 'CELULAR', 'name' => 'CELULAR')) !!}            
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="TELEFONE">Telefone Fixo</label>
                        {!! Form::text('TELEFONE', null, array('class' => 'form-control', 'id' => 'TELEFONE', 'name' => 'TELEFONE')) !!}            
                    </div>
                
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="EMAIL">Email<span class="required">*</span></label>
                        {!! Form::text('EMAIL', null, array('class' => 'form-control', 'id' => 'EMAIL', 'name' => 'EMAIL', 'required' => 'required')) !!}            
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">                
                        <label for="PASSWORD">Senha de Acesso<span class="required">*</span></label>
                        {{ Form::password('PASSWORD', array('class'=>'form-control', 'id' => 'PASSWORD', 'name' => 'PASSWORD', 'required' => 'required' ) ) }}            
                    </div>
                
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">                
                        <label for="INFORMACOES_ADICIONAIS">Informações Adicionais</label>
                        {{ Form::textarea('INFORMACOES_ADICIONAIS', null, array('class' => 'form-control','size' => '50x3')) }}
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <input type="button" value="Voltar" class="btn btn-primary" onclick="window.history.back()" />
                    </div>                     
                                    
                {!! Form::close() !!}

                </div>
                
            </div>                
        </div>
    </div>        

@endsection