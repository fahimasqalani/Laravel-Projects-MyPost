@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    <a type="button" class="btn btn-primary" id="right-panel-link" href="/posts">Back</a>
    <hr>
    <img style="width:70%" src="/storage/images/{{$post->image}}">
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg btn-block">Edit</a>
            <br>
            {!! Form::open(['action'=> ['PostsController@destroy', $post->id],'method'=>'POST','class'=> 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger btn-lg btn-block'])}}

            {!! Form::close() !!}
        @endif
    @endif
@endsection

