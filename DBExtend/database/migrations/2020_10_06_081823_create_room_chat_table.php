<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_chats', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('主鍵');
            $table->integer('pre_id')->comment('上一筆');
            $table->integer('current_position')->comment('為當天此聊天室第幾筆');
            $table->integer('room_id')->comment('房間ID');
            $table->text('content')->comment('聊天內容');
            $table->date('date')->comment('日期');
            $table->text('not_read')->comment('未讀取名單');
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
        Schema::dropIfExists('room_chats');
    }
}
