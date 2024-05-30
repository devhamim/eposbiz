<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function visitors()
    {
        $visitors = Visitor::all();
        return view('backend.visitors', compact('visitors'));
    }
}
