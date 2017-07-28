<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Category;

class ToDoListController extends Controller
{
    public function index(){
    $todolist = Task::all();
    $categories = Category::all();

    $task = Task::find(2);

    return view('tasks.index', ['tabTasks'=>$todolist,'categories'=>$categories]);
    }

public function save(Request $request)
{
   $this->validate($request, [
       'titre' => 'required|max:255',
   ]);
   $todolist = new Task();
   $todolist->titre = $request->input('titre');
   $todolist->do = 0;
   $todolist->category_id = $request->input('category_id');

   $todolist->save();

   return redirect('/list');
 }

  public function suppTask(Request $request)
{

    $todolist_id = $request->input('id');
    $todolist = Task::find($todolist_id);
    $todolist->do = 0;
    $todolist->delete();

    return redirect('/list');
  }

  // public function update(Request $request)
  // {
  //   $todolist_id = $request->input('id');
  //     $todolist = Task::findOrFail($todolist_id);
  //     $todolist->update(Input::all());
  //
  //     return redirect('/list');
  //   }
}
