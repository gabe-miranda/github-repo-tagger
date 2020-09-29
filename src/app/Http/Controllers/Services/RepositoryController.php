<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RepositoryController extends Controller {

    public function index() {
        return view('services.repos');
    }

    public function tagRepository(Request $request) {
        $request_params = $request->all();
        $logged_user_id = Auth::user()->getAuthIdentifier();
        $user_tags = DB::table('user_tags')
            ->select('id', 'name')
            ->where('user_id', '=', $logged_user_id)
            ->get();

        return view('services.save', ['repoData' => $request_params, 'availableTags' => $user_tags->all()]);
    }
}
