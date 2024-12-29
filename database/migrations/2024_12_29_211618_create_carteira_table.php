<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('carteira', function (Blueprint $table) {
            $table->id();
            $table->string('acoes');
            $table->string('eua');
            $table->string('etf');
            $table->string('tesouro');
            $table->string('fiis');
            $table->bigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuario');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carteira');
    }
};
