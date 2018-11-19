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

    <body>
        <div class="super-container">

        
        @section('content')
        <div class="col-lg-8">
            <div class="create-post">
            {!! Form::open(array('route' => 'news.store','data-parsley-validate' => '')) !!}

                {{Form::label('title', 'Title: ')}}
                {{Form::text('title', null, array('class'=>'form-control', 'required'=>'', 'maxlength'=>'255'))}}

                {{Form::label('slug','Slug')}}
                {{Form::text('slug',null,array('class'=>'form-control', 'required'=>'', 'minlength'=>'5','maxlength'=>'255'))}}

                {{ Form::label('tags', 'Tags:') }}
				<select class="form-control select2-multi" name="tags[]" multiple="multiple">
					@foreach($tags as $tag)
						<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
					@endforeach
                </select>

                {{Form::label('body','Post Body: ')}}
                {{Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}

                {{Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn'))}}

            {!! Form::close() !!}
            </div>
        </div>

        </div>
    </body>
@endsection

@section('scripts')

{!!Html::script('js/select2.min.js')!!}

<script type="text/javascript">
    $('.select2-multi').select2();
</script>

@endsection