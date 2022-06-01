<?php

namespace App\Http\Controllers\Translations;

use App\Http\Controllers\Controller;
use App\Http\Requests\TranslationsRequest\addTranslationsRequest;
use App\Models\Translations;
use Illuminate\Http\Request;

class addTranslationsController extends Controller
{
    public function addTranslations() {
        return view('translations.add');
    }

    public function addTranslationsPost(addTranslationsRequest $request) {

        $data = Translations::create([
            'title' => $request->title,
            'contents' => $request->contents,
        ]);
        
        if(!$data) return redirect()->back()->with("not_found");

        return redirect()->back();

    }
}
