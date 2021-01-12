<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormValidateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'slug' => ['required',
                        Rule::unique('posts', 'slug')->ignore($this->post),
                        'regex:/^[a-zA-Z0-9-_]+$/'],
            'post_title' => 'required|min:5|max:80',
            'short_descr' => 'required|max:255',
            'description' => 'required',
            'published' => ''
        ];
    }
}
