<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\note_user;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('note_user', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->integer('phone');
        $table->string('notes');
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
    
};
