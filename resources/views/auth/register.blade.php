@extends('main')

@section('title', '| Register')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!!Form::open()!!}

                {{Form::label('name', 'Name:')}}
                {{Form::email('name',null, ['class' => 'form-control'])}}
                
                {{Form::label('email', 'Email:')}}
                {{Form::email('email',null, ['class' => 'form-control'])}}

                {{Form::label('password', 'Jelszó: ')}}
                {{Form::password('password',null, ['class' => 'form-control'])}}

                {{Form::label('password_confirmation', 'Jelszó megerősítés: ')}}
                {{Form::password('password_confirmation',null, ['class' => 'form-control'])}}

                {{Form::submit('Register', ['class'=>'btn btn-primary'])}}

            {!!Form::close()!!}
        </div>
    </div>

@endsection