<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use DB;

class VisitorController extends Controller
{
    public function visitors()
    {
        $visitors = Visitor::orderBy('id', 'desc')->get();
        $visitorsCount = Visitor::count();
        $mostVisitedCity = Visitor::select('city', \DB::raw('count(*) as count'))
        ->groupBy('city')
        ->orderBy('count', 'desc')
        ->first();
        return view('backend.visitors',[
            'visitorsCount'=> $visitorsCount,
            'visitors'=>$visitors,
            'mostVisitedCity'=>$mostVisitedCity,
        ]);
    }

    // visitors_destroy
    function visitors_destroy($id){
        Visitor::find($id)->delete();
        return back()->with('warning', 'Delete Successfully');
    }
}
