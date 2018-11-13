@extends('main')


@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{$news->title}}</h1>
            <p class="lead">{{$news->body}}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
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
                        {!!Html::linkRoute('news.destroy', 'Töröl', array($news->id),array('class'=>'btn btn-primary btn-block'))!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection