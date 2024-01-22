<?php

namespace App\Services;

use App\Repositories\PostsRepository;

class PostsService
{
  public $postsRepositry;
  public function __construct(PostsRepository $postsRepositry)
  {
    $this->postsRepositry = $postsRepositry;
  }

  // つぶやき一覧を取得する
  public function getPostsList()
  {
    return $this->postsRepositry->getPosts();
  }

  // 新規つぶやきを投稿する
  public function storePost($request)
  {
    return $this->postsRepositry->storePost($request);
  }
}
