<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('主鍵');
            $table->integer('room_type_id')->comment('房間類別');
            $table->string('room_name', 30)->nullable()->comment('群組名稱');
            $table->integer('limit_number')->comment('限制人數');
            $table->integer('sticker_media_id')->comment('頭像ID');
            $table->string('room_key', 14)->nullable()->comment('房間Key');
            $table->string('user_last_seen')->comment('使用者最後讀取時間');
            $table->string('destruction_time')->comment('訊息銷毀時間');
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
        Schema::dropIfExists('rooms');
    }
}
