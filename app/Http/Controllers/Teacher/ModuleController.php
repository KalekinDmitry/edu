<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\Module\StoreRequest;
use App\Http\Requests\Teacher\Module\UpdateRequest;
use App\Models\Module;


/**
 * Class ModuleController
 * @package App\Http\Controllers\Teacher
 */
class ModuleController extends Controller
{

    /**
     * Вывод списка модулей
     */
    public function index()
    {
        //
    }

    /**
     * Форма создания
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('teacher.module.create');
    }

    /**
     * Сохранение в базу
     *
     * @param StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        (new Module())
            ->forceFill(["name" => $request->name, "course_id" => $request->course_id])
            ->save();
        return redirect()->route('course.edit', $request->course_id);
    }

    /**
     * Форма просмотра
     *
     * @param Module $module
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Module $module)
    {
        return view('teacher.module.show', [
            'module' => $module
        ]);
    }

    /**
     * Форма редактирования
     *
     * @param Module $module
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Module $module)
    {
        return view('teacher.module.edit', ['module' => $module]);
    }

    /**
     * Обновление в базе
     *
     * @param UpdateRequest $request
     * @param Module $module
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRequest $request, Module $module)
    {
        $module->update(["name" => $request->name]);
        return redirect()->route('course.edit', [$module->course_id]);
    }

    /**
     * Удаление из базы
     *
     * @param Module $module
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('course.edit', $module->course_id);
    }
}
