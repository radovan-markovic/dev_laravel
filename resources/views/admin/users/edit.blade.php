@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>

    <div class"col-sm-3">

    @if($user->photo)
        <img src="{{env('IMAGES_PATH')}}/{{$user->photo->file}}" class="img.responsive img.rounded">
    @else
    <img src="http://via.placeholder.com/150x150">    
    @endif
       
    </div>

    <div class"col-sm-9">

        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

            <div>
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']); !!}
            </div>

            <div>
                {!! Form::label('email', 'email') !!}
                {!! Form::text('email', null, ['class' => 'form-control']); !!}
            </div>

            <div>
                {!! Form::label('role_id', 'Role') !!}
                {!! Form::select('role_id', $roles, null, ['class' => 'form-control', 'style'=>'height: auto']); !!}
            </div>

            <div>
                {!! Form::label('is_active', 'Status') !!}
                {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class' => 'form-control', 'style'=>'height: auto']); !!}
            </div>

            <div>
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password',  ['class' => 'form-control', 'style'=>'height: auto']); !!}
            </div>

            <div>
                {!! Form::label('photo_id', 'Photo') !!}
                {!! Form::file('photo_id', null,  ['class' => 'form-control']); !!}
            </div>

            <div>
                {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}

         {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id], 'class' => 'pull-right']) !!}
            
                {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
           
            {!! Form::close() !!}

    </div>
    <div class="row">
        @include('includes/form_error')
    </div>
@endsection