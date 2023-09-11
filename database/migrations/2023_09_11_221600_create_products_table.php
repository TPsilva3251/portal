<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trades_id')->unsigned();
            $table->string('name');
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('products', function(Blueprint $table){
            $table->foreign('trades_id')->references('id')->on('trades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function(Blueprint $table){
            $table->dropForeign(['trades_id']);
        });
        Schema::table('products', function(Blueprint $table){
            $table->dropColumn('trades_id');
        });
        Schema::dropIfExists('products');
    }
};
