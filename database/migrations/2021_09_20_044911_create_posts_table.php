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
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *  php artisan make:migration create_posts_table --create=message
     * php artisan migrate
     * php artisan migrate:rollback
     * php artisan migrate:refresh
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
