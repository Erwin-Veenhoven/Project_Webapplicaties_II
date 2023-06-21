<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StationListController extends Controller
{
    public function showPage() {

        $filePath = 'data.json';
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData);

        $gulf = [];
        $carr = [];

        foreach ($data->stations as $station) {
            if (isset($station->data[0]->temperature)) $gulf[] = $station;
            else $carr[] = $station;
        }

        return view('station-list', ['gulf' => $gulf, 'carr' => $carr]);
    }
}
