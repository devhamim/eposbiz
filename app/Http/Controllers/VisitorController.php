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

    // visitors_destroy
    function visitors_destroy($id){
        Visitor::find($id)->delete();
        return back()->with('warning', 'Delete Successfully');
    }
}
