<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormValidator;
use Illuminate\Http\Request;

class CertificateController extends Controller
{

    public function store(FormValidator $request)
    {
        $validated = $request->validated();
        if ($validated->fails()) {
            return back()->withErrors($validated->errors());
        }
    }

    public function download()
    {
        # code...
    }
}
