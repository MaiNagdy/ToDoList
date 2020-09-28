<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $task=DB::table('task')->paginate(5);
        return view('home')->with('tasks',$task);
    }
    public function insert(Request $request)
    {
        $task=new Task();
        $task->task=$request->task;
        $task->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $task=Task::findorFail($id);
        $task->delete();
        return redirect()->back();
        
    }
    public function edit($id)
    {
        $task=Task::findorFail($id);
        
        
        $task->save();
        return view('edit')->with('task',$task);
        
    }
    public function update(Request $request,$id)

    {   
        $task=Task::findorFail($id);

        $task->task=$request->task;
                    
        $task->save();
        return redirect()->route('home');
        
    }
    public function done($id){

        $task=Task::findorFail($id);
        $task->done=1;
        $task->save();
        return redirect()->route('home');

    }
}
