<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class todolistController extends Controller
{


    //*home 
    public function home()
    {
        $datas = Todolist::all();
        return view('home', compact('datas'));
    }

    //* validation and insert data 
    public function addList(Request $request)
    {

        //*validation
        $request->validate([
            'task' => 'required|max:30'
        ]);

        //*insert task to database
        $list = new Todolist();
        $list->task = $request->task;
        $list->save();
        return redirect()->route('todolist.home');
    }


    public function edit($id)
    {
        $data = Todolist::find($id);
        // dd($data);
        return view('edit', compact('data'));
    }

    //*update data and validation
    public function update(Request $request, $id)
    {
        //*validation
        $request->validate([
            'task' => 'required'
        ]);

        //*update data
        $update_data = Todolist::find($id);
        $update_data->task = $request->task;
        $update_data->save();

        return redirect()->route('todolist.home');
    }

    //*delete data
    public function delete($id)
    {
        $item = Todolist::find($id);
        $item->delete();
        return back();
    }

    //*deleleall data
    public function deleteall(){
       Todolist::truncate();
       return back();
    }
}
