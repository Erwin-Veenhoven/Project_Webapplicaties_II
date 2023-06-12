<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;

class DownloadController extends Controller
{
    public function downloadXml(): Response
    {
        $xmlData = '<root><element>Example XML</element></root>';
        $filename = 'data.xml';

        return response($xmlData, 200)
            ->header('Content-Type', 'text/xml')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}
