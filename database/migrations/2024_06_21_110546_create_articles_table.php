<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('short_content')->nullable();
            $table->text('content');
            $table->string('seo_url', 255)->index();
            $table->string('meta_title', 255);
            $table->string('meta_description', 255)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->string('image_url', 255)->nullable();
            $table->string('video_url', 255)->nullable(); // Added video_url
            $table->string('published_by', 100);
            $table->timestamp('published_at')->useCurrent();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
