<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
<<<<<<< HEAD
{ 
    public function index(Post $post)
    {
    return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
}
?>
=======
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
{
    return $post->get();//$postの中身を戻り値にする。
}
}
>>>>>>> main
