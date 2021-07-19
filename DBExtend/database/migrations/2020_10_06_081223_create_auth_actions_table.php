<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_actions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->integer('user_type');
            $table->integer('auth_token_id')->nullable()->default(null);
            $table->integer('auth_action_type_id');
            $table->text('token')->nullable()->default(null);
            $table->text('refresh_token')->nullable()->default(null);
            $table->string('ip', 20);
            $table->integer('auth_action_result_id');
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
        Schema::dropIfExists('auth_actions');
    }
}
