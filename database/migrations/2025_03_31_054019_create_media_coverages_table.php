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
        Schema::create('media_coverages', function (Blueprint $table) {
            $table->id();
            $table->integer("media_coverage_category_id");
            $table->string("title");
            $table->text("slug");
            $table->text("short_description");
            $table->text("author_name");
            $table->string("image");
            $table->text("description");
            $table->date("post_date");
            $table->integer("status");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_coverages');
    }
};
