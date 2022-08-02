<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All post</title>
</head>
<body>
    <h1>All post</h1>
    <form action="{{ route('boat') }}">
        <button>go to home</button>
    </form>
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
        
    @endforeach

    <h1> {{$users['email']}} </h1>

</body>
</html>