<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContrachequeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contra_cheques', function (Blueprint $table) {

            $table->increments('RECNO');

            $table->string('ARQUIVO',100)->comment('Caminho e nome do arquivo')->nullable($value = false);            

            $table->integer('RECNO_EMPLOYEE');

            $table->char('MES', 2)->comment('MEs do contra-cheque em numero...')->nullable($value = false);;

	    $table->char('ANO', 4)->comment('Ano do contra-cheque');
            $table->char('FLAG_SITUACAO', 1)->default('0');        
            
            $table->dateTime('CREATED_AT');

            $table->dateTime('UPDATED_AT');

            $table->foreign('RECNO_EMPLOYEE')->references('RECNO')->on('employees')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contra_cheques');
    }
}
