<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("users", function (Blueprint $table) {
            $table->increments("id");
            $table->string("no");
            $table->string("password");
            $table->integer("invite_code_id")->unsigned();
            $table->timestamps();

            $table->index('invite_code_id');

            $table->foreign("invite_code_id")->references("id")->on("invite_codes");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("users");
    }
}
