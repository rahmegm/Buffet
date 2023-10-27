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
        //calendario usando Carbon
        Schema::create('calendario', function (Blueprint $table) {
            
            $table->id();
            $table->timestamp('data');
            $table->integer('status');
            $table->timestamp('criado_em');
            $table->timestamp('modificado_em');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('calendario');
    }
};
