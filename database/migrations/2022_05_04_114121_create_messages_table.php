<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigInteger('id')->index();
            $table->integer('chat_room_id')->index();
            $table->bigInteger('teacher_room_id')->nullable();
            $table->bigInteger('student_room_id')->nullable();
            $table->string('body',250)->comment('文字数は最大２５０字まで');
            $table->bigInteger('create_user_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
