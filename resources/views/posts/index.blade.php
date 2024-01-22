<!-- TODO: bootstrapの導入・基本UIのデザイン -->

<head>
    <meta charset="UTF-8">
    <title></title>
    @vite('resources/css/app.css')
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"> -->
</head>

<!-- フラッシュメッセージ -->
@if (session('success'))
<div class="bg-success py-3 my-0">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('posts.create') }}">新規投稿</a>
<table>
    <thead>
        <tr>
            <th>ユーザー名</th>
            <th>タイトル</th>
            <th>投稿</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>

</script>