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
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->text("description");
            $table->string("image");
            $table->string("slug");
            $table->tinyInteger("status")->defaut('1');
            $table->string("document_path");
            $table->tinyInteger("is_form")->defaut('0');
            $table->text("meta_title");
            $table->text("meta_description");
            $table->text("meta_keyword");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
