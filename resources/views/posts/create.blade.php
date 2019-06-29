@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-white" style="border-radius:5px;">
        <div class="container">
            <h1>Create Post</h1>
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
                <div class="form_group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title','',['class' => 'form-control','placeholder'=>'Title'])}}
                </div>
                <div class="form_group">
                        {{Form::label('body','Body')}}
                        {{Form::textArea('body','',['class' => 'form-control','placeholder'=>'Body'])}}
                </div>
                <div class="from-group">
                    <br>
                    {{Form::file('cover_image',['class'=> 'btn btn-primary'])}}
                </div>
                {{Form::submit('Submit',['class'=> 'btn btn-default'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
