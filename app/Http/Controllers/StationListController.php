<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StationListController extends Controller
{
    public function showPage() {
        return view('station-list');
    }
}
