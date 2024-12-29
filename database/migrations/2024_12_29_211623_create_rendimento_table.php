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

        Schema::create('rendimento', function (Blueprint $table) {
            $table->id()->foreign('Carteira.id');
            $table->string('rendimento');
            $table->float('valor');
            $table->date('periodo_inicial');
            $table->date('periodo_fim');
            $table->bigInteger('id_carteira');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendimento');
    }
};
