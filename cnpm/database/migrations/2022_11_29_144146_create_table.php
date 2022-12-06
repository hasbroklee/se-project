<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('name');
            $table->string('password');
            $table->integer('role')->default('2');
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->default('1');
            $table->string('title_posts');
            $table->string('img_posts');
            $table->string('content_posts');
            $table->integer('number_access')->nullable();;
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('user');
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_posts');
            $table->string('content_comments');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_posts')->references('id')->on('posts');
        });

        DB::table('user')->insert(
            array(
                'user_name' => '001',
                'name' => 'Admin',
                'password' => 'admin',
                'role' => '1',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
