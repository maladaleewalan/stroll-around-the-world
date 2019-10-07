<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',10);
            $table->string('password',200);
            $table->string('firstname',20);
            $table->string('lastname',20);
            $table->string('email',200)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->enum('role', ['admin', 'user1','user2','user3'])->default('user1');
            $table->bigInteger('point')->default(0);
            $table->string('status',1000)->default("");
            $table->bigInteger('totalpost')->default(0);
            // $table->string('picture',100);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
