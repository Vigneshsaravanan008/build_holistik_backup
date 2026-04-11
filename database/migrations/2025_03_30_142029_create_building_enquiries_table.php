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
        Schema::create('building_enquiries', function (Blueprint $table) {
            $table->id();
            $table->integer("building_id");
            $table->string("name");
            $table->string("email");
            $table->string("job_title");
            $table->string("company_name");
            $table->string("country");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_enquiries');
    }
};
