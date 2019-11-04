<?php

namespace App\Http\Controllers\Teacher\Blocks;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\TextBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Faker\Provider\kk_KZ\Text;

class TextBlockController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Lesson $lesson)
    {
        $teacher = Auth::guard("teacher")->user();
        if ($teacher->can('create', [TextBlock::class, $lesson])) {
            return view('teacher.lesson.text.create', ['lesson' => $lesson]);
        } else {
            return redirect()
                ->route('lesson.edit', [$lesson->module_id, $lesson->id])
                ->with(['message' => 'Permisson denied']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        (new TextBlock())
            ->fill($request->input())
            ->forceFill(['lesson_id' => $request->lesson_id])
            ->save();
        return redirect()->route('teacher.lesson.edit', [$request->lesson_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson, TextBlock $textBlock)
    {
        return view('teacher.lesson.text.show', ['textBlock' => $textBlock, 'lesson' => $lesson]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson, TextBlock $textBlock)
    {
        $teacher = Auth::guard("teacher")->user();
        //dd($lesson, $course, $teacher);
        //dd($textBlock, $teacher);
        if ($teacher->can('edit', [$textBlock])) {
            return view('teacher.lesson.text.edit', ['textBlock' => $textBlock, 'lesson' => $lesson]);
        } else return redirect()
            ->route('lesson.edit', [$lesson->module_id, $lesson->id])
            ->with(['message' => 'permission denied']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson, TextBlock $textBlock)
    {
        $teacher = Auth::guard("teacher")->user();
        if ($teacher->can('update', [$textBlock])) {
            $textBlock->update($request->input());
            $textBlock->save();
            return redirect()->route('lesson.edit', [$lesson->module_id, $lesson->id]);
        } else return redirect()
            ->route('lesson.edit', [$lesson->module_id, $lesson->id])
            ->with(['message' => 'permission enied']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson, TextBlock $textBlock)
    {
        $teacher = Auth::guard("teacher")->user();
        if ($teacher->can('destroy', [$textBlock])) {
            $textBlock->delete();
            return redirect()->route('lesson.edit', [$lesson->module_id, $lesson->id]);
        } else return redirect()
            ->route('lesson.edit', [$lesson->module_id, $lesson->id])
            ->with(['message' => 'permission denied']);
    }
}
