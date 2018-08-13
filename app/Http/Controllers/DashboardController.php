<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farming;
use App\Field;
use App\Tractor;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $farmings = Farming::count();
        $fields = Field::count();
        $tractors = Tractor::count();

        return view('dashboard', compact('farmings', 'fields', 'tractors'));
    }
}
