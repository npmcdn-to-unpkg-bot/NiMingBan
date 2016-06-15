<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("posts", function (Blueprint $table) {
            $table->increments("id");
            $table->string("email")->nullable();
            $table->string("nickname")->nullable();
            $table->string("title")->nullable();
            $table->string("image")->nullable();
            $table->text("content");
            $table->integer("top_post_id")->unsigned();
            $table->integer("board_id")->unsigned();
            $table->timestamps();

            $table->index('top_post_id');
            $table->index('board_id');

            $table->foreign("board_id")->references("id")->on("boards");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("posts");
    }
}
