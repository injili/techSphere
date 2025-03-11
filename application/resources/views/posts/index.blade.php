<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Posts</title>
    </head>
    <body>
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}">Create a New Post</a>
        @foreach($posts as $post)
            <h2>{{ $post->title }}</h2>
            <p>By {{ $post->user->name }} | {{ $post->created_at->format('M d, Y') }}</p>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post->id) }}">Read more</a>

            <h3>Comments</h3>
            @foreach($post->comments as $comment)
                <p>{{ $comment->content }}</p>
                <p>By {{ $comment->user->name }}</p>
            @endforeach
        @endforeach

    </body>