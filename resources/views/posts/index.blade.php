@extends('layouts.app')

@section('content')
    @if (count($posts)>0)
    <div class="container ">
            @foreach ($posts as $post)
            <div class="row center">
                <div class="card" style="width: 30rem;">
                    <img src="/storage/cover_images/{{$post->cover_image}}" style="max-height:100%;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a class=" card-title btn btn-primary title-white" href="/posts/{{$post->id}}">{{$post->title}}</a>
                        <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; max-height:10vh;">{{$post->body}}</p>
                        <hr>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
            {{$posts->links()}}
        </div>
    @else
        <p>No Posts found</p>    
    @endif
@endsection