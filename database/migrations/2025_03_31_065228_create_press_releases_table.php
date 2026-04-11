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
        Schema::create('press_releases', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            $table->integer('status')->default(1);
            $table->longText("short_description");
            $table->longText("description");
            $table->string("slug");
            $table->string("banner_image")->nullable();
            $table->longText("meta_title")->nullable();
            $table->longText("meta_keyword")->nullable();
            $table->longText("meta_description")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('press_releases');
    }
};
