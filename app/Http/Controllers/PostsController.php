<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($name){

        $user = DB::table('user')->get();

        dd($user);
                // $posts = [
                //     'my-first-post' => "Hello, this is my first post",
                //     'my-second-post' => "Second post goes here",
                //     'my-third-post' => "Third post is about laracast learning"
                // ];
            
                // if(! array_key_exists($post, $posts)){
                //     abort( 404, 'sorry the array key not found');
                // }
            
                return view('user', ['user' => $user[$name]]);
    }
}
