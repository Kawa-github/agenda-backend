<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_activities', function (Blueprint $table) {
            $table->id();
            $table->string('evento');
            $table->string('descricao');
            $table->string('data_atividade');
            $table->string('inicio');
            $table->string('termino');
            // $table->boolean('repete')->default(false);
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
        Schema::dropIfExists('posts_activities');
    }
};
