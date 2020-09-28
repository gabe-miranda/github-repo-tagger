<?php

namespace App\Http\Controllers;

use App\Github\GithubRequestHandler;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getData(Request $request) {
        $response_data = GithubRequestHandler::getResponseData($request);

        return view('home', ['response_data' => $response_data]);
    }
}
