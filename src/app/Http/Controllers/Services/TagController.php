<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TagController extends Controller {

    public function index() {
        $user_tags_data = $this->getUserTagsDataFromDatabase();

        return view('services.tags', ['userTags' => $user_tags_data->all()]);
    }

    public function createTag(Request $request) {
        $request_params = $request->all();
        $user_id = Auth::user()->getAuthIdentifier();

        DB::table('user_tags')->insertOrIgnore(
            [
                'user_id' => $user_id,
                'name' => $request_params['tagName'],
                'description' => $request_params['tagDescription'],
            ]
        );

        $user_tags_data = $this->getUserTagsDataFromDatabase();
        return view('services.tags', ['userTags' => $user_tags_data->all()]);
    }

    private function getUserTagsDataFromDatabase() {
        $logged_user_id = Auth::user()->getAuthIdentifier();
        return DB::table('user_tags')
            ->select('name', 'description')
            ->where('user_id', '=', $logged_user_id)
            ->get();
    }
}
