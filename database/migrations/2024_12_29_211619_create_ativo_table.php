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

        Schema::create('ativo', function (Blueprint $table) {
            $table->id();
            $table->float('preco_medio');
            $table->string('nome');
            $table->string('tipo');
            $table->bigInteger('quantidade');
            $table->float('preco');
            $table->bigInteger('id_carteira');
            $table->foreign('id_carteira')->references('id')->on('carteira');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ativo');
    }
};
