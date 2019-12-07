@extends ('layouts.app')

@section ('content')
<h1 >{{$post->title}}</h1>
<a href= '/posts' class= "btn btn-primary"> Go Back </a>
<div>
    {{$post->body}}
</div>
@endsection 