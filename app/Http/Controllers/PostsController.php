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
use App\Http\Resources\PostLike as PostLikeResource;
use App\Http\Resources\Comments as CommentsResource;
class PostsController extends Controller
{
    public function __construct()
    {
         // $this->middleware('auth');
    }
    public function index() {
        $user = Auth::user();
        $user = new User;
        $users = $user;
        $post = new Post;
        $editPost = new Post;
        $PostLike = new PostLike;
        $posts = $post->where('user_id', $user->id)->orderBy('created_at','desc')->get();
        $PostCollection = array();
        $count = count($posts);
        $name = new User;
        $currentUserId = $user->id;

    foreach ($posts as $post) {
         $newPost = $post;
         $newPost['comments'] = $comments;
         $comments = Post::find($post->id)->comments;
         $newPost['liked'] = false;
         $postLike = \DB::table('PostLike')->where('user_id', $user->id)->where('post_id', $post->id)->orderBy('created_at','DESC')->first();
    if(isset($postLike->like) && ($postLike->like == "1")){
         $newpost['liked'] = true;
         }
         $newPost['user'] = Post::find($post->id)->user;
    if($user->id == $post->user_id){
         $newPost['has_permissions'] = 1;
          }
    if($user->id == $post->user_id){
        $newTweet['can_delete'] = 1;
        }
        $postCollection[] = $newPost;
         }
        $posts = $postCollection;
        $likes = DB::table('post_likes')->where('user_id', '=', $user->id)->get();
        return view('home',compact (['users' => $users],'user','potentialFollowers','post','posts','count','names','value'));
        }
    public function show($username){
        $users = User::where('username', $username)->firstOrFail();
        return view('home','$users', ['username' => $username]);
        }

    public function savePost(Request $request){
        $user = Auth::user();
        $post = new Post;
        $post->user_id = $user->id;
        $post->post = $request->post;
        $post-> save();
        return redirect('home');
    }

    public function deletePost(Request $request) {
        $post = Post::find($request->tweet_id);
        if($post){
        Post::destroy($request->post_id);
        }
        return back()
             ->with('success','Successfully deleted!!.');
    }

    public function likePost(Request $request){
        $user = Auth::user();
        $postLike = new PostLike;
        $postLike->user_id = $user->id;
        $postLike->tweet_id = $request->post_id;
        $postLike->like = $request->like;
        $postLike-> save();
         return redirect('home');
        }
    // public function unLikeTweet(Request $request){
    //     $user = Auth::user();
    //     $tweetUnlike = TweetUnLike::get();
    //     $tweetUnLike->user_id = $user_id;
    //     $tweetUnLike->tweet_id = $request->tweet_id;
    //     $tweetUnLike->like = $request->like;
    //     return redirect('home');
    //  }
    public function delete($id){
        $user = Auth::user();
        Comment::where('id', $id)->delete();
          return redirect('home');
    }

    public function editPost(Request $request){
        $post =  Post::find($request->post_id);
        $post->post = $request->post;
        $post->save();
         return redirect('home');
     }

    public function editPostDisplay(Request $request, $id){
        $post = new  Post;
        $post =  Post::find($id);
        return view('edit-post', compact('post'));
    }
    public function getAllUsers(){
        $users = User::get();
        return new UserResource($users);
    }
    public function getAllPosts(Request $request){
        $posts =  Post::get();
        // $id = Auth::user();
        $posts = $post->where('user_id', $user->id)->orderBy('created_at','desc')->get();
         return new  PostResource($posts);
   }
   public function getSavePosts($number){
       $tweets =  Post::limit($number)->orderBy('id','DESC')->get();
       return new  PostResource($posts);
        }
   public function getTweetComments(Request $request, $postId){
       // $user = Auth::user();
       $comment = new Comment;
       $comment ->user_id = $request->user_id;
       $comment ->post_id = $request->tweet_id;
       $comment ->comment = $request->comment;
       // $comment-> save();
       $comment = Comments::where("post_id", "=", $postId)->get();
         return new CommentsResource($comment, $user);
   }
   public function getNewCommentApi(Request $request){
       $user = Auth::user();
       $comment = new Comments;
       $comment->user_id = $request->user_id;
       $comment->post_id = $request->post_id;
       $comment->comment = $request->comment;
       if($request->comment){
           $comment->save();
           return '{"Success" : "1"}';
      }
      else{
           return '{"Success" : "0"}';
      }
       return new CommentsResource($comment, $user);
    }
    public function getPostsByNumber($number){
        $posts =  Post::limit($number)->get();
        return new PostResource($posts);
    }
    public function getPostsByNumberFromStartPoint(Request $request, $number, $id){
        $posts =  Post::limit($number)->where("id", "<=", $id)->orderBy('id','DESC')->get();
        $postsExtended = [];
        $postLike = new  PostLike;
    foreach($posts as $post){
        $postId = $post["id"];
        $postLikes =  PostLike::limit(1)->where("post_id","=", $postId)->where("user_id", "=", $request->user_id)->where("like", "=", "1")->get();
        $likedByUser = 0;
         If(isset($postLikes[0]["like"])){
                $likedByUser = $postLikes[0]["like"];
           }
                 $post["liked_by_user"] = $likedByUser;
                 $totalPostsCount =  PostLike::distinct("user_id")->where("post_id", "=", $postId)->where("like", "=", "1")->get();
                 $post["number-of_likes"] = count($totalPostsCount);
                 $postsExtended[] = $post;
             }
                 $posts = $postsExtended;
                return new TweetResource($post, $posts);
           }
    public function getAll PostLikesApi(Request $request){
        $postLike = new  PostLike;
        $previous PostLike =  PostLike::limit(1)->where("user_id", "=", $request->user_id)->where("post", "=", "1")->get();
           if(count($previous PostLike) == 0){
               $postLike->user_id = $request->user_id;
               $postLike->post_id = $request->post_id;
               $postLike->like = $request->like;
            if( $postLike-> save()){
                     return'{"success" : "1"}';
                }
                else{
                    return'{"success" : "0"}';
                }
            }
                else{
                    $postLikeId = $previous PostLike[0]["id"];
                    $previousPostLike =  PostLike::find($postLikeId);
                    $previousPostLike->like = $request->like;
                    $previousPostLike->save();
                     return '("Liked!" : "1")';
                 }
             }
    // public function getAllTweetUnLikesApi(Request $request){
    //     $tweetUnlike = TweetUnLike::get();
    //     $previousTweetUnLike = TweetUnLike::limit(1)->where("user_id", "=", $request->user_id)->where("tweet", "=", "0")->get();
    //          if(count($previousTweetLike) == 0){
    //              $tweetUnLike->user_id =$request->user_id;
    //              $tweetUnLike->tweet_id = $request->tweet_id;
    //              $tweetUnLike->like = $request->like;
    //           if( $tweetUnLike-> save()){
    //                    return'{"success" : "1"}';
    //               }
    //               else{
    //                   return'{"success" : "0"}';
    //                }
    //                  return new TweetResource($tweetUnLike);
    //           }
    //
    //                   else{
    //                       $tweetLikeId = $previousTweetLike[0]["id"];
    //                       $previousTweetUnLike = TweetLike::find($tweetLikeId);
    //                       $previousTweetUnLike->like = $request->like;
    //                       $previousTweetUnLike->save();
    //                        return '("Liked!" : "0")';
    //                }
    //         }
            // return response()->json($data);
    }
