<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersChart = new UserChart();
        $usersChart->labels(['Jan', 'Feb', 'Mar']);
        $usersChart->dataset('Users by trimester', 'line', [10, 25, 13]);

        return view('home', [ 'usersChart' => $usersChart ] );
    }
}
