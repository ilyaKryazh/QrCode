<?php

namespace App\Libraries;

use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PDF;

class PdfDownloadService
{
    public static function store($data)
    {
        $data['date'] = date('d-m-Y', strtotime($data['date']));
        $pdf = FacadePdf::loadView('certificate', $data);
        $pdf->setPaper('A4', 'landscape');
        $pdf_name = 'certificate' . Str::random(5) . '.pdf';

        //$content = $pdf->download()->getOriginalContent();
        Storage::put('public/certificates/' . $pdf_name, $pdf->output());

        return $pdf_name;
    }
}
