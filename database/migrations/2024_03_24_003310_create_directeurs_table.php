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
        Schema::create('directeurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_ecole');
            $table->string('nom_directeur');
            $table->string('email');
            $table->string('password');
            $table->string('confirmation_password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directeurs');
    }
};
