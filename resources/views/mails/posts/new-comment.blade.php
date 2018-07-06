@component('mail::message')

{{ $comment->body }}

@component('mail::button', ['url' => route('posts.show', $comment->post->id)])
Ver Comentário: {{ $comment->post->title }}
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent