<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('word', function (Blueprint $table) {
            $table->id();
            $table->char('abcedary');
            $table->integer('module');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('word');
    }
};
