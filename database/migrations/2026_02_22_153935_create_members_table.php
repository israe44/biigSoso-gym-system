<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //up() -> creates the table when u migrate
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            //now we gona add our members columns 
            $table->string('name');
            $table->integer('age'); //number field
            $table->string('phone');
            $table->string('membership_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void  //down() -> deletes the table if u undo the migration
    {
        Schema::dropIfExists('members');
    }
};
