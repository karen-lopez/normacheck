<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('state');
            $table->unsignedInteger('all_check_id');
            $table->unsignedInteger('check_list_id');
            $table->foreign('all_check_id')->references('id')->on('all_checks');
            $table->foreign('check_list_id')->references('id')->on('check_lists');
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
        Schema::dropIfExists('user_checks');
    }
}
