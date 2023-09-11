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
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categories_id')->unsigned();
            $table->string('name')->unique();
            $table->string('address');
            $table->string('phone');
            $table->string('location');
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagran')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('image')->nullable();
            $table->boolean('emphasis')->nullable();
            $table->string('tag')->nullable();
            $table->timestamps();
        });

        Schema::table('trades', function ($table) {
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trades', function ($table) {
            $table->dropForeign(['categories_id']);
        });
        Schema::table('trades', function (Blueprint $table) {
           $table->dropColumn('categories_id');
        });
        Schema::dropIfExists('trades');
    }
};
