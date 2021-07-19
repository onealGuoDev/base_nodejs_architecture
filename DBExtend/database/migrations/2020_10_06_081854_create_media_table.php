<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('主鍵');
            $table->integer('media_type_id')->comment('多媒體類別');
            $table->text('store_name')->comment('儲存後的檔名');
            $table->text('original_name')->comment('原始的檔名');
            $table->integer('file_size')->comment('檔案大小');
            $table->text('path')->comment('儲存路徑');
            $table->integer('status_id')->comment('狀態');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
