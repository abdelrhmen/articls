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
        Schema::create('article_descriphions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_id')->unsigned()->index();
            $table->longText('descriphon')->nullable();
            $table->string('card_amges')->nullable();
            $table->foreign('article_id')->references('id')->on('articls')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_descriphions');
    }
};
