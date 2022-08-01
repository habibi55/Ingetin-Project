<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\Storage;

use App\Http\Request\StoreTask;
use App\Http\Request\UpdateTask;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
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

    //Custom
    public function index(Request $request)
    {
        $tasks = Task::where('users_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        // return view('main.task', ['tasks' => $tasks]);

        // $tasks = Task::all();
        return view('main.task', compact('tasks'));
    }

    public function create()
    {
        return view('main.task-create');
    }

    public function store(Request $request)
    {


        // if ($request->has('deadline')) {
        //     $dt = Carbon::parse($request->get('deadline'));
        //     $gg = $dt->subDay();
        // }

        $tasks = new Task;

        $tasks->notif_deadline = Carbon::now('Asia/Jakarta');
        // $tasks->notif_deadline = Carbon::parse($tasks->deadline)->subDay();


        $this->validate($request, [
            'photo' => 'mimes:jpeg,png,jpg',
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
            'deadline' => $request->get('deadline'),
            'notif_deadline' => $request->get('notif_deadline'),
            'category' => $request->get('category'),
            'photo' => $filenameSimpan,
            'link' => $request->get('link'),
            'description' => $request->get('description'),
            'users_id' => Auth::id(),
        ]);

        return redirect()->route('task.index');
    }

    // EDIT TASK
    public function edit($id)
    {
        $task = Task::find($id);
        $category = Category::where('task_id', $task['id'])->get();

        return view('main.task-edit', compact('task', 'category'));
    }

    public function update(Request $request, $id)
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

        // // Category
        // $tasks = $request->all();

        // // update to service
        // $task->update($tasks);

        // // update to category
        // foreach ($tasks['categorys'] as $key => $value) {
        //     $category = Category::find($key);
        //     $category->category = $value;
        //     $category->save();
        // }

        // //add new category
        // if (isset($tasks['category'])) {
        //     foreach ($tasks['category'] as $key => $value) {
        //         $category = new Category;
        //         $category->task_id = $task['id'];
        //         $category->category = $value;
        //         $category->save();
        //     }
        // }


        $task->title = $request['title'];
        $task->deadline = $request['deadline'];
        $task->link = $request['link'];
        $task->category = $request['category'];
        $task->description = $request['description'];
        $task->status = $request['status'];
        $task->update();

        return redirect()->route('task.index');
    }

    public function destroy($id)
    {
        $file = Task::find($id);
        File::delete('storage/poster/' . $file->poster);
        $file->delete();

        // $task = Task::findOrFail($id);
        // $task->delete();

        return redirect()->route('task.index');
    }
}
