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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nPerCodigo')->unique();
            $table->string('cPerApellido',50)->nullable()->unique();
            $table->string('cPerNombre',50)->nullable()->unique();
            $table->string('cPerDireccion',100)->nullable();
            $table->date('cPerAFecNac');
            $table->integer('cPerEdad');
            $table->string('cPerSexo',15)->default('Masculino');
            $table->decimal('cPerSueldo', 6, 2);
            $table->string('cPerRnd',50);
            $table->char('cPerEstado',1);
            $table->string('remenber_toker',100)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};