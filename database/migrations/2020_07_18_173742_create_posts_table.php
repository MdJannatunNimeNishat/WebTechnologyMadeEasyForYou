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
            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('c_id');
            $table->foreign('c_id')->references('id')->on('categories');

            /**/
            /*$table->integer('holding_id')->unsigned()->change();

            $table->foreign('holding_id')->references('id')->on('holdings');*/
            /**/
            $table->string('title');
            // $table->string('category');
            $table->text('desc');
            //$table->string('post_image')->nullable();
            $table->string('post_image')->nullable();
            $table->timestamps();
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
