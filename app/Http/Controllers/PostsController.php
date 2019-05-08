<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostLike;
use App\Comment;
use App\User;
use Auth;
use DB;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Post as PostResource;
class PostsController extends Controller
{

    public function index() {
        $user = new User;
        $users = $user;
        $posts = new Post;
        $posts = $posts->where('user_id', $user->id)->orderBy('created_at','desc')->get();
        $name = new User;
        return view('blog', compact (['users' => $users],'user','posts','name'));
     }
    public function show($username){
        $users = User::where('username', $username)->firstOrFail();
        return view('blog','$users', ['username' => $username]);
   }

    public function savePost(Request $request){
        $posts = new Post;
        $posts->user_id = $user_id->user->id;
        $poss->post = $request->post;
        $posts->post = $request->title;
        $posts->post = $request->body;
        $posts-> save();
        return redirect('blog');
    }

    public function getAllUsers(){
        $users = User::get();
        return new UserResource($users);
    }
    public function getAllPost(Request $request){
        $posts =  Post::get();
        // $id = Auth::user();
        $post = $posts->where('user_id', $user->id)->orderBy('created_at','desc')->get();
         return new  PostResource($post);
   }

   public function getSavePost($number){
       $posts =  Post::limit($number)->orderBy('id','DESC')->get();
       return new  PostResource($posts);
    }


    public function getPostByNumber($number){
        $posts = Post::limit($number)->get();
        return new PostResource($posts);
    }

}
