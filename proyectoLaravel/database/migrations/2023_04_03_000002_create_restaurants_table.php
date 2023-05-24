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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->boolean('terrace');
            $table->float('score')->nullable()->default(0.0);
            $table->float('avg_price');
            $table->string('type_food');
            $table->string('url')->nullable();
            $table->string('img_profile')->nullable();
            $table->string('img_gallery')->nullable();
            $table->string('description', 1000)->nullable();
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
