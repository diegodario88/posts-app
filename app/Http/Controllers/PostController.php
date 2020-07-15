<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    protected $repository;

    public function _construct(Posts $post)
    {
        $this->repository = $post;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Posts $posts)
    {
        $posts = DB::table('posts')
            ->select(
                'posts.id',
                'id_user',
                'title',
                'description',
                'img_url',
                'posts.created_at',
                'name',
                'avatar_url',
                'email'
            )
            ->join('users', 'users.id', '=', 'posts.id_user')
            ->orderBy('posts.created_at', 'DESC')
            ->get();

        return view('dashboard', compact('posts'));
    }

    
    public function edit(Posts $posts)
    {
        //
    }


    public function update(Request $request, Posts $posts)
    {
        //
    }


    public function destroy(Posts $posts)
    {
        //
    }
}
