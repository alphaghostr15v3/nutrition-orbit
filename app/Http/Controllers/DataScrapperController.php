<?php

namespace App\Http\Controllers;

use App\Models\DataScrapper;
use Illuminate\Http\Request;

class DataScrapperController extends Controller
{
    public function index()
    {
        // specific table using model
        $data = DataScrapper::all();
        return view('datascrapper', compact('data'));
    }
}
