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
        Schema::create('encargados', function (Blueprint $table) {
            $table->id();
            $table->string("estado");
            $table->unsignedBigInteger("usuarios_id");
            $table->foreign("usuarios_id")->references("id")->on("usuarios");
            $table->unsignedBigInteger("sedes_id");
            $table->foreign("sedes_id")->references("id")->on("sedes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encargados');
    }
};
