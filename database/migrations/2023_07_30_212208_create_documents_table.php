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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('comnumber');
            $table->string('taxnumber');
            $table->string('typecompany');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('streat');
            $table->string('numbild');
            $table->string('totalcam');
            $table->string('typediv');
            $table->string('size');
            $table->string('totalscr');
            $table->string('typecam');
            $table->string('part');
            $table->string('code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
