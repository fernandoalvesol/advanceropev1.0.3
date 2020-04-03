<?php

namespace App\Http\Controllers\Painel;

use App\Models\Employees;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use Auth;
use Alert;
use DB;
use App;
use URL;

class FuncionarioController extends PainelController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
                
        if (Auth::user()->isadmin) {
            $funcionarios =  Employees::where('FLAG_SITUACAO','=',0)->orderBy('RECNO', 'DESC')->paginate(10);             
        } else {
            $funcionarios =  Employees::where('COD_USUARIO','=',Auth::id())->orderBy('RECNO', 'DESC')->paginate(1);
        }        
                
        return view('Painel.funcionarios.index',['funcionarios'=>$funcionarios]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {            
        return view('Painel.funcionarios.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->DATA_NASCIMENTO = date( 'Y-m-d', strtotime( str_replace('/', '-', $request->DATA_NASCIMENTO)));

        try{
            $user = User::create([               
              'name'       => $request->NOME,
              'email'      => $request->EMAIL,
              'password'   => bcrypt($request->PASSWORD),
              'isadmin'    => $request->PERFIL
            ]); 
  
            $request->DATA_NASCIMENTO = date( 'Y-m-d', strtotime( str_replace('/', '-', $request->DATA_NASCIMENTO))); 
            $request->DATA_ADMISSAO = date( 'Y-m-d', strtotime( str_replace('/', '-', $request->DATA_ADMISSAO))); 
  
            Employees::create([              
              'NOME'                   => $request->NOME,
              'APELIDO'                => $request->APELIDO,            
              'RG'                     => $request->RG,              
              'CPF'                    => $request->CPF,            
              'COD_USUARIO'            => $user->id,            
              'ENDERECO'               => $request->ENDERECO,
              'NUMERO'                 => $request->NUMERO,
              'COMPLEMENTO'            => $request->COMPLEMENTO,            
              'PONTO_REFERENCIA'       => $request->PONTO_REFERENCIA,   
              'BAIRRO'                 => $request->BAIRRO,
              'CIDADE'                 => $request->CIDADE,
              'UF'                     => $request->UF,
              'CEP'                    => $request->CEP,
              'CELULAR'                => $request->CELULAR,
              'TELEFONE'               => $request->TELEFONE,   
              'EMAIL'                  => $request->EMAIL,
              'DATA_NASCIMENTO'        => $request->DATA_NASCIMENTO,
              'DATA_ADMISSAO'          => $request->DATA_ADMISSAO,
              'INFORMACOES_ADICIONAIS' => $request->INFORMACOES_ADICIONAIS,
              //'FOTO'                   => $request->id,    
              'FLAG_SITUACAO'          => 0,   
            ]);                     
                        
            return redirect('painel/funcionarios')->with('success', 'Funcionário Cadastrado com sucesso!');
              
        } catch (QueryException $e){    
            
            //dd($e);  
          
            //$errorCode = $e->errorInfo[1];
  
            $errorText = $e->errorInfo[2];
                
            if (strpos($errorText, 'users_email_unique') !== false) {  
                return redirect('painel/funcionarios')->with('error', 'Email em uso. Por Favor informe outro email!');                
            }
            
            if (strpos($errorText, 'CPF') !== false) {  
                return redirect('painel/funcionarios')->with('error', 'CPF em uso. Por Favor informe outro CPF!');                
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AppProfissional  $appProfissional
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {               
        $funcionario = Employees::where('RECNO',$id)->first();

        $usuario = User::where('id',$funcionario->COD_USUARIO)->first();

        //dd($usuario->isadmin);

        //converting data_nascimento to brazilian format...
        $funcionario->DATA_NASCIMENTO = date( 'd/m/Y' , strtotime($funcionario->DATA_NASCIMENTO)); 
        $funcionario->DATA_ADMISSAO = date( 'd/m/Y' , strtotime($funcionario->DATA_ADMISSAO));
        
        return view('Painel.funcionarios.show',['funcionario' => $funcionario, 'isAdmin' => $usuario->isadmin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AppProfissional  $appProfissional
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {                
        $funcionario = Employees::where('RECNO',$id)->first(); 
        
        $funcionario->DATA_NASCIMENTO = date( 'd/m/Y' , strtotime($funcionario->DATA_NASCIMENTO));

        $funcionario->DATA_ADMISSAO = date( 'd/m/Y' , strtotime($funcionario->DATA_ADMISSAO));

        $usuario = User::where('id',$funcionario->COD_USUARIO)->first();

        //dd($usuario);

        return view('Painel.funcionarios.edit',['funcionario' => $funcionario, 'isAdmin' => $usuario->isadmin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AppProfissional  $appProfissional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        //dd($request);

        $request->DATA_NASCIMENTO = date( 'Y-m-d', strtotime( str_replace('/', '-', $request->DATA_NASCIMENTO)));
        $request->DATA_ADMISSAO = date( 'Y-m-d', strtotime( str_replace('/', '-', $request->DATA_ADMISSAO)));
        
        try {   
                
            Employees::where('RECNO', $id)->update([
                            'NOME' => $request->NOME,
                            'APELIDO' => $request->APELIDO,  
                            'DATA_NASCIMENTO' => $request->DATA_NASCIMENTO,
                            'DATA_ADMISSAO' => $request->DATA_ADMISSAO,
                            'CPF' => $request->CPF,
                            'RG' => $request->RG,
                            'ENDERECO' => $request->ENDERECO,
                            'NUMERO' => $request->NUMERO,               
                            'COMPLEMENTO' => $request->COMPLEMENTO,
                            'PONTO_REFERENCIA' => $request->PONTO_REFERENCIA,
                            'BAIRRO' => $request->BAIRRO,
                            'CIDADE' => $request->CIDADE,
                            'UF' => $request->UF,
                            'CEP' => $request->CEP,
                            'CELULAR' => $request->CELULAR,
                            'TELEFONE' => $request->TELEFONE,                            
                            'INFORMACOES_ADICIONAIS' => $request->INFORMACOES_ADICIONAIS
                        ]); 
                        
            $funcionario = Employees::where('RECNO',$id)->first(); 

            //dd($funcionario);
                        
            User::where('id', $funcionario->COD_USUARIO)->update([
                            'isadmin'  => $request->PERFIL,
                            'password' => bcrypt($request->PASSWORD),
                            'name' => $request->NOME
                        ]);
            
            return redirect()->back()->with('success', 'Dados Cadastrais alterados com sucesso!');

            //return redirect()->route('Painel.funcionarios.index');
            
        } catch (QueryException $e){

            //$errorCode = $e->errorInfo[1];                                

            return redirect()->back()->with('error', 'Falha ao tentar atualizar os dados do Funcionário.');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AppProfissional  $appProfissional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {                
        
        Employees::where('RECNO', $id)->update(['FLAG_SITUACAO' => 1]);                     
        
        return redirect()->back()->with('success', 'Registro de Funcionário excluído com sucesso!');
                
    }
  
    
}
