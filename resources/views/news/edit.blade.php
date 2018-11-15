@extends('main')
@section('title','|Edit Blog')

@section('content')

    <div class="row">

        {!!Form::model($news,['route'=>['news.update',$news->id],'method'=>'PUT'])!!}
            <div class="col-md-8">
                {{Form::label('title','Tile:')}}
                {{Form::text('title',null,["class"=>'form-control input-lg'])}}

                {{Form::label('slug','Slug',['class'=>'form-spacing-top'])}}
                {{Form::text('slug',null,['class'=>'form-control input-lg form-spacing-top'])}}

                {{Form::label('body',"Body",['class'=>'form-spacing-top'])}}
                {{Form::textarea('body',null,['class'=>'form-control'])}}
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
                        {!!Html::linkRoute('news.show', 'Mégse', array($news->id),array('class'=>'btn btn-primary btn-block'))!!}
                    </div>
                    <div class="col-sm-6">
                        {{Form::submit('Mentés',['class'=>'btn btn-succes btn-block'])}}
                    </div>
                </div>
            </div>
        </div>

        {!!Form::close()!!}
    </div>

@stop