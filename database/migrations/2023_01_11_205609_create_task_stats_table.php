<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_stats', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('restrict');
            $table->bigInteger('tasks_number');
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
        Schema::dropIfExists('task_stats');
    }
}
