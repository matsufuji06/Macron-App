<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsRepository
{
  // つぶやき一覧を取得する
  public function getPosts()
  {
    return Post::orderBy('id', 'DESC')->get();
  }

  // 新規つぶやきを投稿する
  public function storePost($request)
  {
    $new_post = new Post();
    $new_post->title = $request->title;
    $new_post->body = $request->body;
    $new_post->user_id = Auth::id();
    $new_post->save();
  }
}
