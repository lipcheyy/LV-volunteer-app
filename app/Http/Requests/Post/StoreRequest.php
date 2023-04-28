<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

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
            'title'=>'string|required',
            'content'=>'string|required',
            'category_id'=>'integer|required'
        ];
    }
}
