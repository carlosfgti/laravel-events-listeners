<h1>{{ $post->title }}</h1>
<hr>
<p>{{ $post->body }}</p>
<hr>

<form action="{{ route('comments.store') }}" method="POST">
    <div class="form-group">
        <textarea name="body" id="" cols="20" rows="10" placeholder="Comentário"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Comentar</button>
    </div>
</form>