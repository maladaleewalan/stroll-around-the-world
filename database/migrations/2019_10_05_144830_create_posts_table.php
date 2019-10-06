<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->timestamps();
<<<<<<< HEAD
            $table->string('detail', 300);
            $table->softDeletes();
            $table->bigInteger('like')->default(0);

=======
            $table->enum('type', ['place', 'food', 'culture', 'post'])->default('post');
            $table->string('detail', 3000);
            $table->softDeletes();
>>>>>>> 87c7113a046eafcdee5acd39d1f4ef34d530bfa9
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
