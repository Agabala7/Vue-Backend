<?php

namespace App\Http\Controllers\TranslationsApiController;

use App\Http\Controllers\Controller;
use App\Http\Requests\TranslationsApiRequest\addTranslationsApiRequest;
use App\Models\Translations;
use Illuminate\Http\Request;

class addTranslationsApiController extends Controller
{

    public function addTranslateApi() {
        return view('api');
    }

    public function addTranslateApiPost(addTranslationsApiRequest $request) {
        Translations::create([
            'title'=>$request->title,
            'contents'=>$request->contents
        ]);

        return redirect()->response()->json(1);

    }

}
