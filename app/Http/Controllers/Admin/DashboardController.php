<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard view
    public function index()
    {
        return view('admin.dashboard'); // Your dashboard view
    }

    // Overview view
    public function overview()
    {
        return view('admin.overview'); // Your overview view
    }

    // Award Certificate view
    public function award()
    {
        return view('admin.award'); // Your award view
    }

    // Violation view
    public function violation()
    {
        return view('admin.violation'); // Your violation view
    }
}

