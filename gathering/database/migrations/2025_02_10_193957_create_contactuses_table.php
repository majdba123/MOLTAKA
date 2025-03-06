<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('contactuses', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->enum('goal', ['suggested', 'complaint', 'inquiry']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('contactuses');
    }
};
