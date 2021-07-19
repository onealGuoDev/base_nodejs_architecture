<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthActionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_action_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->comment('主鍵');
            $table->string('name', 100)->comment('名稱');
            $table->text('content')->nullable()->default(null)->comment('描述');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth_action_types');
    }
}
