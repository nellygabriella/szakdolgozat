@extends('main')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEduline</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/news.css" />
        {!!Html::style('css/select2.min.css')!!}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </head>

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $news->title }}</h1>
            <p class="lead">{{$news->body}}</p>
            <hr>
            <div class="tags">
				@foreach ($news->tags as $tag)
					<span class="label label-default">{{ $tag->name }}</span>
				@endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>URL: </dt>
                    <dd><a href="{{url('post/'.$news->slug)}}">{{url($news->slug) }}</a></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Készült: </dt>
                    <dd>{{date('M j, Y h:is',strtotime($news->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Módositva: </dt>
                    <dd>{{date('M j, Y h:is',strtotime($news->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!!Html::linkRoute('news.edit', 'Szerkeszt', array($news->id),array('class'=>'btn btn-primary btn-block'))!!}
                    </div>
                    <div class="col-sm-6">

                        {!! Form::open(['route'=>['news.destroy',$news->id],'method' => 'DELETE']) !!}

                        {!! Form::submit('Törlés',['class'=>'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection