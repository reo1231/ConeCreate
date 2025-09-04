<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('caption');
            $table->string('file_path');
            $table->string('file_type');
            $table->boolean('is_public')->default(true);
            $table->string('meta_title')->nullable();
            $table->string('meta_artist_name')->nullable();
            $table->string('meta_album_name')->nullable();
            $table->string('meta_genre')->nullable();
            $table->string('meta_creation_date')->nullable();
            $table->integer('meta_image_width')->nullable();
            $table->integer('meta_image_height')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
