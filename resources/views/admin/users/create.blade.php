@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>

    {!! Form::open(['method' => 'post', 'action' => 'AdminUsersController@store', 'files' => true]) !!}

        <div>
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']); !!}
        </div>

        <div>
            {!! Form::label('email', 'email') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'value' => '']); !!}
        </div>

         <div>
            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id', [''=>'Select'] + $roles, null, ['class' => 'form-control', 'style'=>'height: auto']); !!}
        </div>

        <div>
            {!! Form::label('is_active', 'Status') !!}
            {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], 0, ['class' => 'form-control', 'style'=>'height: auto']); !!}
        </div>

        <div>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password',  ['class' => 'form-control', 'style'=>'height: auto', 'value' => '']); !!}
        </div>

         <div>
            {!! Form::label('photo_id', 'Photo') !!}
            {!! Form::file('photo_id', null,  ['class' => 'form-control']); !!}
        </div>

        <div>
            {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @include('includes/form_error')

@endsection