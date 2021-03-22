<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admiror()
    {
        return view('product.laptop.admiror');
    }

    public function essential()
    {
        return view('product.laptop.essential');
    }

    public function liber_v_gold()
    {
        return view('product.laptop.liber-v-gold');
    }

    public function liber_v14()
    {
        return view('product.laptop.liber-v14');
    }

    public function liber()
    {
        return view('product.laptop.liber');
    }

    public function magus()
    {
        return view('product.laptop.magus');
    }

    public function pura()
    {
        return view('product.laptop.pura');
    }

    public function ubique_mouse()
    {
        return view('product.accessories.ubique-mouse');
    }

    public function imago_series_smart_mirror()
    {
        return view('product.smart-device.imago-series-smart-mirror');
    }

    public function modus_smart_scale()
    {
        return view('product.smart-device.modus-smart-scale');
    }
}
