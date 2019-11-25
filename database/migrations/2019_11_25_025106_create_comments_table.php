<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('details');
            $table->string('responsible', 100);
            $table->string('place', 100);
            $table->unsignedInteger('user_check_id');
            $table->foreign('user_check_id')->references('id')->on('user_check');
            $table->unsignedInteger('evidence_id')->nullable();
            $table->foreign('evidence_id')->references('id')->on('evidence');
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
        Schema::dropIfExists('comments');
    }
}
