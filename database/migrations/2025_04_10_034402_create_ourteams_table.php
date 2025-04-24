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
        Schema::create('ourteams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_departement')->nullable();
            $table->foreign('id_departement')->references('id')->on('departements');
            $table->string('name');
            $table->string('title');
            $table->string('email');
            $table->string('phone');
            $table->string('ig');
            $table->string('fb');
            $table->string('yt');
            $table->string('tiktok');
            $table->string('image');
            $table->string('home');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourteams');
    }
};
