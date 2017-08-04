<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->string('username')->after('email');
            $table->string('hobby');
            $table->string('gender');
            $table->string('technology');
            $table->string('image')->nullable();
            $table->timestamp('created_on')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('users',function(Blueprint $table){
                $table->dropColumn('username','hobby','gender','technology','image','confirmed','confirmation_code');
       });
    }
}
