<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotificationsTableAddUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('detail')->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id']);
        });

        Schema::enableForeignKeyConstraints();

    }
}
