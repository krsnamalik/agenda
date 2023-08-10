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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->string('agenda')->nullable();
            $table->string('agenda2')->nullable();
            $table->string('agenda3')->nullable();
            $table->string('agenda4');
            $table->string('agenda5');
            $table->string('location')->nullable();
            $table->string('location2')->nullable();
            $table->string('location3')->nullable();
            $table->string('location4');
            $table->string('location5');
            $table->string('pic')->nullable();
            $table->string('pic2')->nullable();
            $table->string('pic3')->nullable();
            $table->string('pic4');
            $table->string('pic5');
            $table->string('date')->nullable();
            $table->string('date2')->nullable();
            $table->string('date3')->nullable();
            $table->string('date4');
            $table->string('date5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
