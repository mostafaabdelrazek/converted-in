<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaskTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE TRIGGER tr_task_user_stats AFTER INSERT ON `tasks` FOR EACH ROW
            INSERT INTO task_stats (`id`, `tasks_number`, `created_at`, `updated_at`)  
            VALUES (NEW.assigned_to_id, 1, NEW.created_at, NULL)
            ON DUPLICATE KEY UPDATE tasks_number = tasks_number+1, updated_at = now()
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DROP TRIGGER `tr_task_user_stats`');
    }
}
