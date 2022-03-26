<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormValidator;
use App\Libraries\PdfDownloadService;
use QrCode;
class CertificateController extends Controller
{

    public function store(FormValidator $request)
    {
        $validated = $request->validated();
        $certificate_id = PdfDownloadService::store($validated);

        return redirect()->route('QrCode')->with(['certificate_id' => $certificate_id]);
    }

    public function getQrCode()
    {

        return view('qrCode');
    }
}
