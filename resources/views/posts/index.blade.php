@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagens</div>

                <div class="card-body">
                    @forelse ($posts as $post)
                        <a href="{{ route('posts.show', $post->id) }}">
                            <h1>{{ $post->title }}</h1>
                        </a>
                        <hr>
                    @empty
                        <p>Nenhum post</p>
                    @endforelse

                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
