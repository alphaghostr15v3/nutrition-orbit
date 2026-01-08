<?php

namespace App\Http\Controllers;

use App\Models\DataFetch;
use Illuminate\Http\Request;

class DataFetchController extends Controller
{
    public function index()
    {
        $data = DataFetch::all();
        return view('datafetch', compact('data'));
    }
}
