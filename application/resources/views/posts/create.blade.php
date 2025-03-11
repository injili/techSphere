<!DOCTYPE html>
<html>
    <head>
        <title>Create Post</title>
    </head>
    <body>
        <h1>Create a new post</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            <br><br>

            <label for="content">Content</label><br>
            <textarea id="content" name="content" required>{{ old('content') }}</textarea>
            <br><br>

            <label for="user_id">User</label><br>
            <input type="number" id="user_id" name="user_id" value="{{ old('user_id') }}" required>
            <br><br>
            
            <button type="submit">Create post</button>
        </form>
            <a href="{{ route('posts.index') }}">Back to Posts</a>
    </body>
</html>