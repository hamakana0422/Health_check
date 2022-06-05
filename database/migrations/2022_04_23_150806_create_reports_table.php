<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsiged()->index();
            $table->string('student_name', 40)->index()->nullable()->comment('生徒の名前');
            $table->string('condition', 10)->comment('体調について');
            $table->tinyInteger('meal',)->comment('食事について');
            $table->tinyInteger('sleep',)->comment('睡眠時間');
            $table->tinyInteger('temperature',)->comment('体温');
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
        Schema::dropIfExists('reports');
    }
}
