<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\todo;

class TodoListControllerController extends Controller
{
    public function index(){
        // $todoitem=todo::all()
        // return view ('Welcome',compact('todoitem'));
        
            return view('dashboard',['todoitem'=>todo::all()]);

    }


    public function store(Request $req){
        $item= new Todo();
        $item->todoitem=$req->input('todoitem');
        $item->save();
        return redirect('/')->with('status','Item has been Store Sucessfully');
        
    }

    public function markcomplete($id){
        $item=todo::find($id);
        $item->is_Completed="1";
        $item->update();
        return redirect('/')->with('status','Item has been Marked as Complete');
        
    }

    public function delete($id){
        $item=Todo::findorfail($id);
        $item->delete();
        return redirect('/')->with('status','Item  Deleted Sucessfully');

        
    }
    public function edit($id)
    {
        $data = Todo::find($id);
        return view('edit',['value'=>$data]);
        
        }


        public function updateTodo(Request $req){
            $item=Todo::find($req->id);
            $item->todoitem=$req->input('todo');
            $item->save();
            return redirect('/');
            
        }
         


}
