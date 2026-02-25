<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //name of the plan (basic, vip, premium)
            $table->decimal('price', 8, 2); //price of the plan (8 digits total, 2 after decimal)
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
