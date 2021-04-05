<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Banner;
use App\Models\Brochure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $banners = DB::select('select * from banners');
        $grids = DB::select('select * from grids');
        $brochures = DB::select('select * from brochures');
        return view('home',['banners'=>$banners],['grids'=>$grids],['brochures'=>$brochures]);
    }


    public function adminDashboard()
    {
        $users = User::all()->whereNotIn('is_admin','1');
        $users = DB::select('select * from users');
        $count1 = DB::table('whatnews')->count();
        $count2 = DB::table('services')->count();
        $count3 = DB::table('exclusive_brands')->count();
        $count4 = DB::table('retail_partners')->count();
        return view('admin.dashboard', compact('count1','count2','count3','count4'),['users'=>$users]);
    }

    public function userdashboard()
    {
        return view('dashboard');
    }

    public function news_event()
    {
        $whatnews = DB::select('select * from whatnews');
        $events = DB::select('select * from events');
        return view('news_event.news_event',['whatnews'=>$whatnews],['events'=>$events]);
    }

    public function buy()
    {
        $exclusivebrands = DB::select('select * from exclusive_brands');
        $retailpartners = DB::select('select * from retail_partners');
        return view('wheretobuy.buy',['exclusivebrands'=>$exclusivebrands],['retailpartners'=>$retailpartners]);
    }

    public function service_center()
    {
        $services = DB::select('select * from services');
        return view('service-center.support',['services'=>$services]);
    }

    public function sales_enquiry()
    {
        return view('sales-enquiry.sales_enquiry');
    }
}
