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
        Schema::create('cornos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->string('cidade');
            $table->integer('pontuacao')->default(0);
            $table->string('nivel')->default('Corno Iniciante');
            $table->text('motivo');
            $table->date('data_descoberta');
            
            $table->index(['pontuacao', 'cidade']); 
            $table->index('nivel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cornos');
    }
};
