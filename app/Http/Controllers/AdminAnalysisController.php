<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAnalysisController extends Controller
{
    public function index()
    {
        return view('admin.manageAnalysis', [
            'title' => 'ManageAnalysis',
        ]);
    }
}
