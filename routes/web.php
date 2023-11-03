<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// class Todo1
// {
//     public function __construct(
//         public int $id,
//         public string $title,
//         public string $description,
//         public ?string $long_description,
//         public bool $completed,
//         public string $created_at,
//         public string $updated_at
//     ) {
//     }
// }


Route::get('/',function(){

    return redirect()->route('tasks.index');
});
/**
 * inorder to use variables not define in an anonymous function we use the use($tasks) 
 * after the anonymous function parenthesis 
 */
// Route::get('/tasks', function () use($tasks) {
//     return view('index',[
//         'tasks'=>$tasks
//     ]);
// })->name('tasks.index');

// Route::get('/tasks/{id}',function($id) use($tasks){
    
//     //Get task that matches the id parameter
//     /**
//      * Use the collect method to convert an array to an
//      * object to allow you map,filter and find elements
//      * in the array based on certain conditions
//      */
     
//     $task = collect($tasks)->firstWhere('id','=',$id);
//     if (!$task) {
//         /**
//          * use the abort function to terminate the code
//          * execution
//          */ 
//         abort(Response::HTTP_NOT_FOUND);
//     }
//     return view('show',['task'=>$task]);
// })->name('tasks.show');
Route::get('/tasks',function(){
    return view('index',['tasks'=>Task::lastest()->paginate(10)]);
})->name('tasks.index');
//To create a route that just returns a view ,it's best to use the view method on the Route facade
Route::view('/tasks/create','create')->name('tasks.create');
Route::get('/tasks/{task}/edit',function(Task $task){
     return view('edit',['task'=>$task]);
})->name('tasks.edit');

Route::get('/tasks/{task}',function(Task $task){
    return view('show',['task'=>$task]);
})->name('tasks.show');

Route::post('/tasks',function(TaskRequest $request){

    
    // validate request
    $data = $request->validated();


    $task = new Task();
    $task->title= $data['title'];
    $task->description= $data['description'];
    $task->long_description= $data['long_description'];

    $task->save();
    return redirect()->route('tasks.show',['task'=>$task->id]);


})->name('tasks.store');
Route::delete('/tasks/task',function(Task $task){
    $task->delete();
    return redirect()->route('tasks.index'); 
}    )->name('tasks.destroy');
Route::put('/tasks/{task}',function(Task $task,TaskRequest $request){

    
    // validate request
    $data = $request->validated();

    $task->title= $data['title'];
    $task->description= $data['description'];
    $task->long_description= $data['long_description'];

    $task->save();
    return redirect()->route('tasks.show',['task'=>$task->id]);


})->name('tasks.update');
Route::fallback(function(){
    return 'Page not found 404';
});
