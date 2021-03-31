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
        return view('product.laptop.admiror.admiror');
    }

    public function essential()
    {
        return view('product.laptop.essential.essential');
    }

    public function liber_v_gold()
    {
        return view('product.laptop.liber-v-gold.liber-v-gold');
    }

    public function liber_v14()
    {
        return view('product.laptop.liber-v.liber-v14');
        // return view('product.laptop.liber-v.feature');
    }

    // public function spec()
    // {
    //     return view('product.laptop.liber-v.spec');
    // }



    public function liber()
    {
        return view('product.laptop.liber.liber');
    }

    public function magus()
    {
        return view('product.laptop.magus.magus');
    }

    public function pura()
    {
        return view('product.laptop.pura.pura');
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

    public function showProductSpec( $slug)
    {
        if ( $slug == 'admiror' )
        {
            return view('product.laptop.admiror.spec');
        }

        if ( $slug == 'pura' )
        {
            return view('product.laptop.pura.spec');
        }

        if ( $slug == 'liber-v14' )
            {
                return view('product.laptop.liber-v.spec');
            }

        if ( $slug == 'liber-v-gold' )
        {
            return view('product.laptop.liber-v-gold.spec');
        }


        if ( $slug == 'magus' )
        {
            return view('product.laptop.magus.spec');
        }

        if ( $slug == 'essential' )
        {
            return view('product.laptop.essential.spec');
        }

        if ( $slug == 'liber' )
        {
            return view('product.laptop.liber.spec');
        }

        if ( $slug == 'imago' )
        {
            return view('product.smart-device.spec');
        }

    }
}
