@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="css/index.css">
@endsection
@section('content')
  
<br><br>
    <div class="container">          
        <table class="table table-bordered table-hover">        
          <thead class="thead-dark">
            <tr>
              <th>Title</th>
              <th>Body</th>
              <th>Name</th>
              <th>Date</th>
            </tr>
          </thead>
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <tr>
                            <td><h4><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4></td>
                            <td><p>{{ str_limit(($post->body), 70) }}</p></td>
                            <td>{{$post->user->name}}</td>
                            <td><small>Written on {{$post->created_at->format('d.m.Y')}}</small></td>
                        </tr>
                    @endforeach
                @else
                    <p>No posts found</p>
                @endif 
        </table>
    </div>
@endsection