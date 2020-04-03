<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContraCheques extends Model
{	    
    protected $table = 'contra_cheques';    

    protected $fillable = ['RECNO', 'ARQUIVO','RECNO_EMPLOYEE','MES','ANO','FLAG_SITUACAO']; 
    
}
