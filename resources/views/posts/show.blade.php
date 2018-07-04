<h1>{{ $post->title }}</h1>
<hr>
<p>{{ $post->body }}</p>
<hr>

<form action="{{ route('comments.store') }}" method="POST">
    <input type="hidden" name="id" value="{{ $post->id }}">
    <div class="form-group">
        <textarea name="body" class="form-control" cols="20" rows="10" placeholder="Comentário"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Comentar</button>
    </div>
</form>