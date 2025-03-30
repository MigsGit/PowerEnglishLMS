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
        Schema::create('writing_collection_bulletins', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('page_link')->nullable();
            $table->string('author')->nullable();
            $table->string('is_release')->nullable();
            $table->string('status')->nullable();
            $table->string('views_count')->nullable();
            $table->date('registered_date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writing_collection_bulletins');
    }
};
