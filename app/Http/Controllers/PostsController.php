<?php

namespace App\Http\Controllers;

use App\Services\PostsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class PostsController extends Controller
{
    public $postsService;
    public function __construct(PostsService $postsService)
    {
        $this->postsService = $postsService;
    }

    // つぶやき一覧を取得する
    public function index()
    {
        $posts = $this->postsService->getPostsList();
        return view('posts/index', compact('posts'));
    }

    // つぶやき投稿画面を表示する
    public function create()
    {
        return view('posts/create');
    }

    // 新規つぶやきを投稿する
    public function store(Request $request)
    {
        // TODO: バリデーションルール作成
        DB::beginTransaction();
        try {
            $this->postsService->storePost($request);
            DB::commit();
        } catch (Exception) {
            DB::rollBack();
        }
        return redirect()->route('posts.index')->with('success', '投稿に成功しました。');
    }
}
