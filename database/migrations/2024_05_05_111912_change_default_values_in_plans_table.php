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
        Schema::table('plans', function (Blueprint $table) {
            $table->boolean('textwords')->default(true)->change();
            $table->boolean('rollover')->default(true)->change(); 
            $table->boolean('contacts')->default(true)->change();
            $table->integer('messages')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->boolean('textwords')->default(false)->change();
            $table->boolean('rollover')->default(false)->change(); 
            $table->boolean('contacts')->default(false)->change();
            $table->double('messages')->change();
        });
    }
};
