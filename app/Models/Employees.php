<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{	    
    protected $table = 'employees';    

    protected $fillable = ['RECNO', 'NOME','APELIDO', 'RG', 'CPF', 'COD_USUARIO', 'DATA_ADMISSAO',
                            'ENDERECO','NUMERO', 'COMPLEMENTO', 'PONTO_REFERENCIA', 'BAIRRO', 'CIDADE', 'UF', 'CEP',
                            'CELULAR','TELEFONE', 'EMAIL', 'DATA_NASCIMENTO', 'INFORMACOES_ADICIONAIS', 'FOTO', 'FLAG_SITUACAO']; 
    
}
