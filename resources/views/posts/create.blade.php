@extends ('layouts.app')

@section ('content')
<h1 >Create a post</h1>
<a href= '/posts' class= "btn btn-primary"> Go Back </a>
<div>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{--This form was made using laravel collective--}}
            {{--this is a comment in blade --}} 
            {{--this sets this part of the forms title to "title", and lables the input as title--}}
        {{Form::label('title', 'Title')}}
        {{--this is for the actual text input, Blank field as second param because its a create filed(so it doesnt exist yet)--}}
        {{-- Third param is a bootstrap class to style it, and then title is the placeholder text--}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
         {{--this sets the title for this part of the form to "body", and lables the input as body--}}
        {{Form::label('body','Body')}}
        {{Form::textarea('body', '', [ 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
</div>    
@endsection 
