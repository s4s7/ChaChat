<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
     * コントローラーにバリデーションを書くこともできるが、分けた方がbetter
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required|max:500',
        ];
    }

    public function attributes()
    {
        return [
            'body' => '本文',
        ];
    }
}