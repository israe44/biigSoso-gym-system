<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//this migration will add a new column to the members table (plan_id) that will connect each member to a plan
return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('members', function (Blueprint $table){
            $table->foreignId('plan_id') ->constrained()->onDelete('cascade');
// if a plan gets deleted all the members that belongs to it get deleted too(cascade)
        });
    }

   
    public function down(): void
    {
        Schema::table('members', function (Blueprint $table){
            $table->dropForeign(['plan_id']); //remove the relationship
            $table->dropColumn('plan_id'); //remove the column
        });
    }
};
