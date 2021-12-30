<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('cnpjFilial', 20);
            $table->string('cnpjPosto', 20);
            $table->string('codCargo', 30);
            $table->string('codEmpresa', 30);
            $table->string('codFilial', 30);
            $table->string('codLocal', 30);
            $table->string('codRateio', 30);
            $table->string('cpfColaborador', 20);
            $table->string('datSol', 10);
            $table->string('dataAdm', 10);
            $table->string('emaSolicitante', 50);
            $table->string('empSoc', 15);
            $table->mediumText('exaSolicitado')->nullable();
            $table->string('fonSolicitante', 15);
            $table->string('masLocal', 30);
            $table->string('nasColaborador', 10);
            $table->string('nomCargo', 80);
            $table->string('nomColaborador', 80);
            $table->string('nomEmpresa', 100);
            $table->string('nomFilial', 100);
            $table->string('nomLaboratorio', 100);
            $table->string('nomPosto', 100);
            $table->string('nomRateio', 100);
            $table->string('nomSolicitante', 50);
            $table->string('numColab', 50);
            $table->integer('retTipExa')->unsigned();
            $table->enum('sexColaborador', ['M', 'F']);
            $table->mediumText('estAtual')->nullable();
            $table->mediumText('estNova')->nullable();
            $table->mediumText('obsSolicitacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
