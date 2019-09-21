<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestQuestion;
use App\Models\TaskBlock;
use Illuminate\Support\Facades\Aut;

class TestQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher')->except('show');
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
    public function create(TaskBlock $taskBlock)
    {
        //
        return view('lesson.TaskBlock.TestQuestion.create', ['taskBlock' => $taskBlock]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TaskBlock $taskBlock)
    {
        //
        $testQuestion = TestQuestion::create($request->input());
        $testQuestion->task_block_id = $taskBlock->id;
        $testQuestion->save();
        return redirect()->route('testQuestion.edit', [$taskBlock->id, $testQuestion->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TaskBlock $taskBlock, TestQuestion $testQuestion)
    {
        //
        return view('lesson.TaskBlock.TestQuestion.show',[
            'taskBlock' => $taskBlock,
            'testQuestion' => $testQuestion,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskBlock $taskBlock, TestQuestion $testQuestion)
    {
        //
        return view('lesson.TaskBlock.TestQuestion.edit', [
            'taskBlock' =>$taskBlock,
            'testQuestion' => $testQuestion,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskBlock $taskBlock, TestQuestion $testQuestion)
    {
        //
        $testQuestion->update($request->input());
        $testQuestion->save();
        return redirect()->route('taskBlock.edit', [$taskBlock->lesson_id, $taskBlock->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskBlock $taskBlock, TestQuestion $testQuestion)
    {
        //
        $testQuestion->delete();
        return redirect()->route('taskBlock.edit', [$taskBlock->lesson_id, $taskBlock->id]);
    }
}
