<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div>
        <label for="title" class="form-label">タイトル</label>
        <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" required>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="body" class="form-label">投稿</label>
        <input type="text" id="body" class="form-control" name="body" value="{{ old('body') }}" required>
        @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">登録</button>
</form>