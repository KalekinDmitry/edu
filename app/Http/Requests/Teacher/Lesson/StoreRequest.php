<?php

namespace App\Http\Requests\Teacher\Lesson;

use App\Models\Module;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int module_id
 * @property string title
 * @property string|null excerpt
 * @property boolean is_published
 */
class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'module_id' => 'required|exists:' . Module::TABLE,
            'title' => 'required|string',
            'excerpt' => 'nullable|string',
            'is_published' => 'bool',
        ];
    }
}
