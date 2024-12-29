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

        Schema::create('transacao', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->bigInteger('quantidade');
            $table->float('valor');
            $table->dateTime('data');
            $table->bigInteger('id_ativo');
            $table->foreign('id_ativo')->references('id')->on('ativo');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacao');
    }
};
