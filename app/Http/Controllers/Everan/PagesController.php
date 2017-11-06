<?php

namespace App\Http\Controllers\Everan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }
}
