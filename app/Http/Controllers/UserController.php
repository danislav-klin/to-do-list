<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addTask()
    {
        return view('user.addon');
    }
    
    public function store(Request $req)
    {
        
        $req->validate([
            'title' => ['required', 'min:5'],
            'user_id' => ['nullable'],
            'text' => ['required', 'min:8'],
        ]);
        $task = new Task();
        $task->title = $req->title;
        $task->user_id = $req->user_id;
        $task->discription = $req->text;

        $task->save();

        return redirect()->route('user.room');
    }
    public function show(string $id, string $list)
    {
        $list = Task::find($list);
        return view('user.edit', ['list' => $list]);
    }
    
    public function update(string $id, string $list, Request $req)
    {
        
        $task = Task::find($list);
        $task->title = $req->title;
        $task->discription = $req->text;

        $task->save();

        return redirect()->route('user.show', [$id, $list])->with('success', 'This is list updated');
    }
    public function delete(Request $req)
    {
        $task = Task::find($req->id);

        $task->delete();

        return redirect()->route('user.room');
    }
}
