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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->text('room_image1');
            $table->text('room_image2');
            $table->text('room_image3');
            $table->text('room_image4');
            $table->text('room_image5');
            $table->boolean('featured')->nullable();
            $table->string('title');
            $table->longText('full_desc');
            $table->string('short_desc');
            $table->boolean('wifi');
            $table->boolean('aircon');
            $table->boolean('kitchen');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
