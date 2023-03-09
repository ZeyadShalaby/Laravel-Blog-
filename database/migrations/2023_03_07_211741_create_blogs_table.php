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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("url");
            $table->boolean("is_trending");
            $table->string("author");
            $table->string("author_image_url");
            $table->string("author_image_portrait");
            $table->string("author_image_landscape");
            $table->string("title");
            $table->string("date");
            $table->text("description");
            $table->text("content");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

?>