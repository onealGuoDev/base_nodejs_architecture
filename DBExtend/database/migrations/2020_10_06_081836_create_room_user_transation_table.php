<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomUserTransationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_user_transation', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('主鍵');
            $table->integer('room_id')->comment('房間ID');
            $table->integer('user_id')->comment('使用者ID');
            $table->boolean('owner')->comment('主持人');
            $table->boolean('message_warn')->comment('訊息提醒');
            $table->integer('status_id')->comment('狀態');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_user_transation');
    }
}
