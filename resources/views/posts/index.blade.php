@extends ('layouts.app')

@section ('content')
<h1 class= "card-title">Posts Archive</h1>
@if(count($posts) >0)
    @foreach($posts as $post)

    <div class= "card" > 
    <h3><a href="/posts/{{$post->id}}">{{$post->title}} </h3>
<small>Written on {{$post->created_at}}</small>
    </div>
    @endforeach
    {{$posts->links()}}
@else 
{{$posts->links()}}
<p> No Posts found!</p>
@endif 
@endsection