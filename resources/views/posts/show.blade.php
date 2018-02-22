@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
    <br>
    <a href="/posts"><i class="fas fa-arrow-left fa-2x"></i></a>
    <br><br>
 
    <br><br>
    
    <div class="card text-white bg-success mb-3" style="max-width: 80rem;">
        <div class="card-header"><h2>{{$post->title}}</h2></div>
        <div class="card-body">
                <div class="row">
                        <div class="col-lg-10">
                                <p>{{$post->user->name}}</p> 
                        </div>
                        <div class="col-lg-2">
                               <p> {{$post->created_at->format('d.m.Y')}}</p>
                        </div>
                    </div>
          <p class="card-text">{{$post->body}}</p>
        </div>
    </div>

    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
    @endif
@endsection