<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        return view('home');
    }


    public function adminDashboard(User $user)
    {
        $users = User::all()->whereNotIn('is_admin','1');
        return view('admin.dashboard');
    }

    public function userdashboard()
    {
        return view('dashboard');
    }

    public function news_event()
    {
        return view('news_event.news_event');
    }

    public function buy()
    {
        return view('wheretobuy.buy');
    }

    // public function supportcenter()
    // {
    //     return view(support_center.supportcenter);
    // }

    public function sales_enquiry()
    {
        return view('sales-enquiry.sales_enquiry');
    }
}
