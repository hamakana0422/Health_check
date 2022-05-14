<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('user_type')->after('id');
            $table->string('first_name')->after('user_type')->unique();
            $table->string('last_name')->after('first_name');
            $table->string('first_name_kana')->nullable()->after('last_name');
            $table->string('last_name_kana')->nullable()->after('first_name_kana');
            $table->string('gender')->after('last_name_kana');
            $table->string('birthday')->after('gender');
            $table->boolean('login_check')->nullable()->default(false)->after('remember_token')->change();            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_type');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('first_name_kana');
            $table->dropColumn('last_name_kana');
            $table->dropColumn('gender');
            $table->dropColumn('birthday');
            $table->boolean('login_check')->nullable()->after('remember_token')->change();

        });
    }
}
