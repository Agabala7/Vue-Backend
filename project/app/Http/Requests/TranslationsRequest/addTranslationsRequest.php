<?php

namespace App\Http\Requests\TranslationsRequest;

use Illuminate\Foundation\Http\FormRequest;

class addTranslationsRequest extends FormRequest
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
            'title' => 'required|min:10|max:255',
            'contents' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Başlıq mütləqdir',
            'title.min:10.max:255' => 'Başlıq sadəcə 10 sözdən ibarət olmalıdı',
            'contents.required' => 'Tərçümə vacibdir'
        ];

    }
}
