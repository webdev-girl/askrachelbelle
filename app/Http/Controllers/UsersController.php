<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use Auth;
use Illuminate\Support\Facades\Cache;
class UsersController extends Controller
{

        public function show(User $user){
            // $user = Auth::user();
            // $user = new User();
            $user = $user->find($id);
            $post = $post->where('user_id', $user->id)->get();
            return view('blog', compact('user','post'));
        }
}
