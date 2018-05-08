@extends('layouts.admin')

@section('content')

<h1>Create Posts</h1>

     <div class"row">   
        {!! Form::open(['method' => 'post', 'action' => 'AdminPostsController@store', 'files' => true]) !!}

            <div>
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']); !!}
            </div>

            <div>
                {!! Form::label('category_id', 'Category') !!}
                {!! Form::select('category_id', ['' => 'options'], null, ['class' => 'form-control']); !!}
            </div>

            <div>
                {!! Form::label('photo_id', 'File') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']); !!}
            </div>

            <div>
                {!! Form::label('body', 'Text') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']); !!}
            </div>


            <div>
                {!! Form::submit('Create Post', ['class' => 'btn btn-primary', 'rows'=>3]) !!}
            </div>
            {!! Form::close() !!}
    </div>
    <div class"row">
        @include('includes/form_error') 
    </div>
@endsection

@section('footer')
    
@endsection