<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMylistitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mylistitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video_id');
            $table->integer('user_id');
            $table->timestamps();

            $table->index(['id', 'video_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mylistitems');
    }
}
