<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('record_id')->nullable();
            $table->string('physicist', 150)->nullable();
            $table->string('chemical', 150)->nullable();
            $table->string('biological', 150)->nullable();
            $table->string('ergonomic', 150)->nullable();
            $table->string('accident', 150)->nullable();
            $table->string('other', 150)->nullable();
            $table->timestamps();

            $table->foreign('record_id')->references('id')->on('records')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risks');
    }
}
