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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('contact');
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->json('images')->nullable()->comment("[{name, path, ext, size}]");
            $table->string('email');
            $table->string('site_web');
            $table->json('infrastructure')->comment("[category, items[]]");
            $table->json('responsable')->comment("{nom, prenom, email}");
            $table->json('localisation')->nullable()->comment("{long, lat}"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
