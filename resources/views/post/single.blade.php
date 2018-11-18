@extends('main')

@section('title', "| $news->title")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $news-title}}</h1>
            <p>{{$news->body}}</p>
        </div>
    </div>

@endsection