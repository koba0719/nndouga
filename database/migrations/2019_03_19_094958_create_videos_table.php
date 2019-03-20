<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->string('video_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('content-type')->nullable();
            $table->string('video-status')->nullable();
            $table->integer('user_id');
            $table->timestamps();

            // alter table
            $table->index(['video-status', 'user_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
