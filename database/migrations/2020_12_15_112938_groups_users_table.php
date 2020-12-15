<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GroupsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups_users', function (Blueprint $table) {
            $table->biginteger('id');
            $table->biginteger('user_id')->length(20)->unsigned();
            $table->foreign('user_id')->references('id')->on('users')-> onDelete('cascade');

            $table->biginteger('group_id')->length(20)->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_users');
    }
}
