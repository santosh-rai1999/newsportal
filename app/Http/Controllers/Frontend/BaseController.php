<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    // public $menus;

    public function __construct()
    {
        $menus = Category::all();
        $ads = Advertisement::orderBy('created_at', 'desc')->get();
        View::share([
            'menus' => $menus,
            'ads' => $ads,
        ]);
    }
}
