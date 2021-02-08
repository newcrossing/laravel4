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
            $table->bigInteger('user_id')->unsigned();
            $table->string('name')->comment('Название статьи');
            $table->longText('text');
            $table->string('tags')->nullable();
            $table->integer('published')->default('1')->nullable();
            $table->integer('hits')->default('0')->nullable();
            $table->enum('notify', ['0', '1', '2']); // уведомление. 0 - не требуется . 1 - требуется . 2 - уведомлено
            $table->integer('in_main')->default('0')->nullable();; // на главную страницу
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
