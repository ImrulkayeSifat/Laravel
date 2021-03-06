<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class PostController extends Controller
{
    //php artisan stub:publish
    public function getAllPost()
    {
        $posts=DB::table('post')->get();
        return view('posts',compact('posts'));
    }
    public function addPost()
    {
        return view('add-post');
    }
    public function addPostSubmit(Request $req)
    {
        DB::table('post')->insert([
            'title'=> $req->title,
            'body'=>$req->body
        ]);
        return back()->with('post_created','post has been created successfully!');
    }

    public function getPostById($id)
    {
        $post = DB::table('post')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }

    public function deletePost($id)
    {
        DB::table('post')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully');
    }

    public function editPost($id)
    {
        $post = DB::table('post')->where('id',$id)->first();
        return view('edit-post',compact('post'));
    }

    public function updatePost(Request $req)
    {
        DB::table('post')->where('id',$req->id)->update([
            'title' => $req->title,
            'body' => $req->body
        ]);
        return back()->with('post_updated','Post has been updated successfully!');
    }

    public function innerJoinClause()
    {
        $request = DB::table('users')
                ->join('post','users.id','=','post.user_id')
                ->select('users.name','post.title','post.body')
                ->get();
        return $request;
    }
    public function leftJoinClause()
    {
        $result = DB::table('users')
                  ->leftJoin('post','users.id','=','post.user_id')
                  ->get();
        return $result;
    }
    public function rightJoinClause()
    {
        $result = DB::table('users')
                  ->rightJoin('post','users.id','=','post.user_id')
                  ->get();
        return $result;
    }
    public function getAllPostUsingModel()
    {
        $posts = Post::all();
        return $posts;
    }
}
