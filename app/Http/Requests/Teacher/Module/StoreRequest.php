<?php

namespace App\Http\Requests\Teacher\Module;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property int course_id
 * @property string name
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
            'name' =>       'required|string',
            'course_id' =>  'required|exists:'.Course::TABLE.',id',
        ];
    }
}
