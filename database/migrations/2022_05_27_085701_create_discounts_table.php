<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entity_id')->comment('ID of category or product');
            $table->enum('entity', ['category', 'product',])->default('category')->comment('is entity_id of category or product?');
            $table->enum('type', ['perc', 'abs'])->default('perc')->comment('percentage or absolute');
            $table->integer('amount');
            $table->dateTime('expiration')->nullable();
            $table->string('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discounts');
    }
};
