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

use File;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('main.task', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.create-task');
    }

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
    public function edit(Task $task)
    {
        $photo_task = Task::where('photo', $task['id'])->get();

        return view('main.edit-task', compact('task', 'photo_task'));
    }

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

    public function store(StoreTask $request)
    {
        $data = $request->all();

        $data['users_id'] = Auth::user()->id;

        // add to Task
        $service = Task::create($data);

        // add to thumbnail service
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $file) {
                $path = $file->store(
                    'assets/task/photo',
                    'public'
                );
            }
        }

        return redirect()->route('task.index');
    }

    public function update(UpdateTask $request, Task $task)
    {
        $data = $request->all();

        // update to service
        $task->update($data);


        // update to thumbnail service
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $key => $file) {
                // get old photo thumbnail
                $get_photo = Task::where('photo', $key)->first();

                // store photo
                $path = $file->store(
                    'assets/task/photo',
                    'public'
                );

                // update thumbail
                $photo_task = Task::find($key);
                $photo_task->photo = $path;
                $photo_task->save();

                // delete old photo photo
                $data = 'storage/' . $get_photo['photo'];
                if (File::exists($data)) {
                    File::delete($data);
                } else {
                    File::delete('storage/app/public/' . $get_photo['photo']);
                }
            }
        }

        // add to thumbnail service
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $file) {
                $path = $file->store(
                    'assets/task/photo',
                    'public'
                );
            }
        }


        return redirect()->route('task.index');
    }
}
