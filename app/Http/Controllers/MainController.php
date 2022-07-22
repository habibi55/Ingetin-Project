<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Request\StoreTask;
use App\Http\Request\UpdateTask;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

use App\Models\Event;

use File;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //Custom
    public function index()
    {
        $tasks = Task::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('main.task', compact('tasks'));
    }

    public function create()
    {
        return view('main.create-task');
    }

    public function store(StoreTask $request)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpeg,png,jpg',
        ]);
        if ($request->hasFile('photo')) {
            $filenameWithExt = Str::slug($request->get('title'));
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->move('storage/photo', $filenameSimpan);
        } else {
            $filenameSimpan = NULL;
        }

        $tasks = Task::create([
            'title' => $request->get('title'),
            'status' => $request->get('status'),
            'description' => $request->get('description'),
            'photo' => $filenameSimpan,
            'users_id' => Auth::id(),
        ]);

        return redirect()->route('task.index');
    }

    // EDIT TASK
    public function edit($id)
    {
        $task = Task::find($id);

        return view('main.edit-task', compact('task'));
    }

    public function update(UpdateTask $request, $id)
    {
        $task = Task::find($id);

        $this->validate($request, [
            'photo' => 'mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('photo')) {
            $filenameWithExt = Str::slug($request->get('title'));
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->move('storage/photo', $filenameSimpan);
            $oldFileName = $task->photo;
            File::delete('storage/photo/' . $oldFileName);
            $task->photo = $filenameSimpan;
        } else {
            $filenameSimpan = $task->photo;
        }


        $task->title = $request['title'];
        $task->description = $request['description'];
        $task->status = $request['status'];
        $task->update();

        return redirect()->route('task.index');
    }
}
