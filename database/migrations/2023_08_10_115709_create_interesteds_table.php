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
        Schema::create('interesteds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phone');
            $table->string('email');
            $table->string('name_company');
            $table->string('type_company');
            $table->string('size_company');
            $table->string('message');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interesteds');
    }
};
