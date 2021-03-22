<?php

namespace App\Http\Controllers;

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
        return view('wheretobuy.buy');
    }
}
