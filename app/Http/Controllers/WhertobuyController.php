<?php

namespace App\Http\Controllers;
use App\Models\ExclusiveBrand;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WhertobuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buy()
    {
        // $exclusivebrands= "";
        // $exclusivebrands = DB::select('select * from exclusive_brands');
        // $exclusivebrands = ExclusiveBrand::all();
        // return view('wheretobuy.buy',['exclusivebrands'=>$exclusivebrands]);
    }
}
