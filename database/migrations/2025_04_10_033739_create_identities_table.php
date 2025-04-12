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
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('meta');
            $table->text('adress');
            $table->text('link_map');
            $table->integer('phone');
            $table->string('email');
            $table->string('fb');
            $table->string('ig');
            $table->string('tiktok');
            $table->string('yt');
            $table->string('service');
            $table->string('image1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identities');
    }
};
