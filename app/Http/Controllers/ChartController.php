<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function showPage($stnName)
    {
        $filePath = 'data.json';
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData);

        $station = $data->stations[0];
        foreach ($data->stations as $stn) {
            if ($stn->name === $stnName) $station = $stn;
        }

        return view('chart', ['station' => $station]);
    }
}
