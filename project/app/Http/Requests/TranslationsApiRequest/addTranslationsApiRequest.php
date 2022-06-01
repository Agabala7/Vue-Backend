<?php

namespace App\Http\Requests\TranslationsApiRequest;

use Illuminate\Foundation\Http\FormRequest;

class addTranslationsApiRequest extends FormRequest
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
