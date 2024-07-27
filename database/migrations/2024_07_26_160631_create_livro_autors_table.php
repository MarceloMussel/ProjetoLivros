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
        Schema::create('livro_autors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('livro_id');
            $table->foreign('autor_id')->references('id')->on('autors');
            $table->foreign('livro_id')->references('id')->on('livros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livro_autors');
    }
};
