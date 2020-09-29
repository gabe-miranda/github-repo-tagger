<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RepositoryController extends Controller {

    public function index() {
        $logged_user_id = Auth::user()->getAuthIdentifier();
        $user_repos_data = DB::table('tagged_repositories')
            ->join('user_tags', 'user_tags.id', '=', 'tagged_repositories.tag_id')
            ->select(
                'tagged_repositories.name as name',
                'tagged_repositories.full_name as full_name',
                'tagged_repositories.stars as stars',
                'tagged_repositories.description as description',
                'tagged_repositories.language as language',
                'tagged_repositories.created_at as created_at',
                'user_tags.name as tag_name'
            )
            ->where('tagged_repositories.user_id', '=', $logged_user_id)
            ->get();

        return view('services.repos', ['userRepos' => $user_repos_data->all()]);
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

    public function persistTag(Request $request) {
        $request_params = $request->all();
        $logged_user_id = Auth::user()->getAuthIdentifier();

        DB::table('tagged_repositories')->insertOrIgnore([
            'user_id' => $logged_user_id,
            'tag_id' => $request_params['tag'],
            'name' => $request_params['name'],
            'full_name' => $request_params['fullName'],
            'stars' => $request_params['stars'],
            'description' => $request_params['description'],
            'language' => $request_params['language'],
            'created_at' => $request_params['createdAt'],
        ]);

        return view('home');
    }
}
