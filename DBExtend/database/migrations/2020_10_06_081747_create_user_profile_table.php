<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('主鍵');
            $table->integer('user_id')->comment('使用者編號');
            $table->integer('sticker_media_id')->comment('頭像ID');
            $table->string('name', 100)->comment('姓名');
            $table->string('nick_name', 100)->nullable()->default(null)->comment('匿名');
            $table->string('message', 100)->nullable()->default(null)->comment('個性留言');
            $table->boolean('message_warn')->comment('訊息提醒');
            $table->integer('message_warn_music_type')->comment('聲音提醒');
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
        Schema::dropIfExists('user_profiles');
    }
}
