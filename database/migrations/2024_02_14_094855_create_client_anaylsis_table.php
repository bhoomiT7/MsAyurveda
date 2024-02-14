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
        Schema::create('client_anaylsis', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('city')->nullable();
            $table->string('gender');
            $table->unsignedInteger('age');
            $table->string('email')->unique();
            $table->string('contactno');
            $table->string('bodyframe')->nullable();
            $table->string('typeofhair')->nullable();
            $table->string('colorofhair')->nullable();
            $table->string('skin')->nullable();
            $table->string('complexion')->nullable();
            $table->string('bodyweight')->nullable();
            $table->string('nails')->nullable();
            $table->string('sizeandcoloroftheteeth')->nullable();
            $table->string('paceofperformingwork')->nullable();
            $table->string('mentalactivity')->nullable();
            $table->string('memory')->nullable();
            $table->string('sleeppattern')->nullable();
            $table->string('weatherconditions')->nullable();
            $table->string('reactionsunderadversesituation')->nullable();
            $table->string('mood')->nullable();
            $table->string('eatinghabit')->nullable();
            $table->string('hunger')->nullable();
            $table->string('bodytemperature')->nullable();
            $table->string('joints')->nullable();
            $table->string('nature')->nullable();
            $table->string('bodyenergy')->nullable();
            $table->string('qualityofvoice')->nullable();
            $table->string('dreams')->nullable();
            $table->string('socialrelations')->nullable();
            $table->string('wealth')->nullable();
            $table->string('bowelmovement')->nullable();
            $table->string('communicationskill')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_anaylsis');
    }
};
