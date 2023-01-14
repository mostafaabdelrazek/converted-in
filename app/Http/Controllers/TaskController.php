<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\TaskStats;
use App\Http\Requests\TaskCreateRequest;

class TaskController extends Controller
{
    public function Page(Request $request) {
        $tasks = Task::with(['user', 'admin'])->orderBy('created_at', 'desc')->paginate((int)$request->page_size, ['*'], 'page', (int)$request->page);
        $tasks = $tasks->toArray();
        unset($tasks['links']);
        return response()->json($tasks, 200);
    }

    public function Create(TaskCreateRequest $request) {
        $validated = $request->validated();
        $task = new Task();
        $task->title = $validated['strTitle'];
        $task->description = $validated['strDescription'];
        $task->assigned_to_id = $validated['intUserID'];
        $task->assigned_by_id = $validated['intAdminID'];
        $result = $task->Save();
        if ($result !== true) {
            return response()->json($task, 500);
        }
        return response()->json($task,200);
    }

    public function LoadStats(Request $request) {

    }
}
