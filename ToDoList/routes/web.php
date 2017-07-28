<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list', 'ToDoListController@index');

Route::post('/save', 'ToDoListController@save');

Route::post('/list/delete', 'ToDoListController@suppTask');

Route::get('categories', function(){
  $category = App\Category::find(1);
  $tasks = App\Task::find(1);

  $task->name = 'Tache';
  $task->category_id = $category->id;

  $task->save();


  dd([$category->tasks]);

});
