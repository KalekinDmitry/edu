<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Lesson\StoreRequest;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('teacher.lesson.create');
    }

    public function store(StoreRequest $request)
    {
        (new Lesson())
            ->fill($request->input())
            ->forceFill(['module_id' => $request->module_id])
            ->save();
        return redirect()->route('teacher.module.edit', [$request->module_id]);
    }

    public function show(Lesson $lesson)
    {
        return view('teacher.lesson.show', ['lesson' => $lesson]);
    }

    public function edit(Lesson $lesson)
    {
        return view('teacher.lesson.edit', ['lesson' => $lesson]);
    }

    public function update(Request $request, Lesson $lesson)
    {
        $lesson->update($request->all());
        return redirect()->route('teacher.lesson.edit', [$lesson->id]);
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('teacher.module.edit', [$lesson->module_id]);
    }
}
