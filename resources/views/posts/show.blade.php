@extends('layouts.app')

@section('content')
    <a class="btn title-white font-md" href="/posts">Posts</a>
    <hr>
    <div class="jumbotron jumbotron-fluid bg-white" style="border-radius:5px;">
                
                <div class="container">
                    <h1>{{$post->title}}</h1>
                </div>
                <hr>
                <div class="center">
                    <img style="max-height:100%; max-width:100%;"  src="/storage/cover_images/{{$post->cover_image}}" alt="">
                </div>
                <br>
                <br>
                <div class="container">
                    {{$post->body}}
                </div>
                <hr>
                <div class="container">
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
                <hr>
                @if (!Auth::guest())
                    @if (Auth::user()->id == $post->user_id)
                        <a href="/posts/{{$post->id}}/edit" class="btn">Edit</a>

                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=>'btn float-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::SUBMIT('Delete', ['class'=>'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                    
                @endif
    </div>
@endsection