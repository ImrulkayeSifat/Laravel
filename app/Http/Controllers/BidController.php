<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid;
use App\Models\Comment;
class BidController extends Controller
{
    //php artisan stub:publish
    public function addBid()
    {
        $bid = new Bid();
        $bid->title = "First bid title";
        $bid->body = "First bid Description";
        $bid->save();
        return "post has been created successfully";
    }
    public function addComment($id)
    {
        $bid = Bid::find($id);
        $comment = new Comment();
        $comment->comment = "This is third comment.";
        $bid->comments()->save($comment);
        return "Comment has been posted";
    }
    public function getCommentsByPost($id)
    {
        $comments = Bid::find($id)->comments;
        return $comments;
    }
}
