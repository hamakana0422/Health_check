<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->integer('id')->index();
            $table->bigInteger('received_user_id')->index()->comment('お知らせを受信した生徒のユーザーID');
            $table->bigInteger('sent_user_id')->index()->default(null)->comment('お知らせを送信した先生のユーザーID');
            $table->char('message','250');
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
        Schema::dropIfExists('notifications');
    }
}
