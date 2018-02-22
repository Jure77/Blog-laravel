@extends('layouts.app')

@section('content')
    <br>
    <h1>Edit Post</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id]]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">Cancel</a>
    {!! Form::close() !!}     
@endsection