<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Models\ContraCheques;
use App\Models\Employees;
use Auth;
use Storage;

class ContraChequeController extends PainelController{

    public function index()
    {                                 

        $contracheques = ContraCheques::select('contra_cheques.RECNO','employees.NOME','employees.APELIDO','contra_cheques.MES','contra_cheques.ANO')
                                ->leftJoin('employees', 'contra_cheques.RECNO_EMPLOYEE','=','employees.RECNO')
                                ->where('contra_cheques.FLAG_SITUACAO','=',0)
                                ->paginate(10);                                

        return view('Painel.contracheques.index',['contracheques'=>$contracheques]);
        
    }

    public function create(){

        $funcionarios =  Employees::where('FLAG_SITUACAO','=',0)->get();
        
        return view('Painel.contracheques.create',['funcionarios'=>$funcionarios]);

    }

    public function store(Request $request){
               
        if($request->file('ARQUIVO') && $request->file('ARQUIVO')->isValid()){

            //validacao para nao permitir inserir mais de um contra cheque no mesmo mes E ANO para o mesmo funcionario
            $contracheque = ContraCheques::where('RECNO_EMPLOYEE','=',$request->FUNCIONARIO)
                                            ->where('MES','=',$request->MES)
                                            ->where('ANO','=',$request->ANO)
                                            ->where('FLAG_SITUACAO','=',0)
                                            ->first();

            if ($contracheque) {
                return redirect('painel/contracheques')->with('error', 'Já existe um Contra Cheque para esse mês/Ano desse Funcionário'); 
            } 
            
            //dd($request);

            $path = $request->file('ARQUIVO')->store('arquivos');            

            $contracheque = new ContraCheques;
            $contracheque->ARQUIVO = $path;
            $contracheque->RECNO_EMPLOYEE = $request->FUNCIONARIO;
            $contracheque->MES = $request->MES; 
            $contracheque->ANO = $request->ANO;            
            $contracheque->FLAG_SITUACAO = 0;  
            
            if($contracheque->save()){
                return redirect('painel/contracheques')->with('success', 'Contra Cheque inserido com Sucesso.');
            } else {
                return redirect('painel/contracheques')->with('error', 'Falhou ao Inserir Contra Cheque.');
            }
            
        } else {
            return redirect('painel/contracheques')->with('error', 'Falhou na validacao do arquivo.');
        }
                
    }

    public function destroy($id)
    {                        

        ContraCheques::where('RECNO', $id)->update(['FLAG_SITUACAO' => 1]);                     
        
        return redirect()->back()->with('success', 'Contra Cheque excluído com sucesso!');
                
    }

    public function download(Request $request)
    {             

        $arquivo = ContraCheques::where('RECNO', $request->id)->first();        

        return response()->download(storage_path() .'/app/'. $arquivo->ARQUIVO);
        
    }

    public function ajxContraCheques(Request $request)
    {                     

        $retorno = ContraCheques::where('RECNO_EMPLOYEE', $request->funcionario)->get();

        return $retorno;
                
    }

}