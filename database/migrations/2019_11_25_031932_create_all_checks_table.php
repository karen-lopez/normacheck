<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_checks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description');
            $table->unsignedInteger('norm_control_id');
            $table->foreign('norm_control_id')->references('id')->on('norm_controls');
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
        Schema::dropIfExists('all_checks');
    }
}
