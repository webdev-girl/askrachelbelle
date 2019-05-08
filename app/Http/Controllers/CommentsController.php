<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index() {
        $user = Auth::user();
        $comment = new Comment;
        $comment = $comment->get();
        $comment = $comment->where('user_id', $user->id)->get();
        return view('blog',compact('user','comment'));
  }

    public function saveComment(Request $request){
        // die("Test");
        $user = Auth::user();
        $comment = new Comment;
        $comment ->user_id = $user->id;
        $comment ->post_id = $request->post_id;
        $comment ->comment = $request->comment;
        $comment-> save();
        return redirect('blog');
        }

    public function deleteComment(Request $request) {
         $comment = Comment::find($request->comment_id);
         if($comment){
        Comment::destroy($request->comment_id);
        }
           return redirect('blog');

     }

     public function editComment(Request $request){
         $comment = Comment::find($request->id);
         $comment = Comment::find($request->comment_id);
         $comment ->comment = $request->comment;
         $comment ->save();
            return redirect('blog');
        }

    public function editCommentDisplay(Request $request, $id){
         $comment = new Comment;
         $comment = Comment::find($id);
        return view('edit-comment', compact('comment'));
    }
}
