@extends('layouts.admin')

@section('content')

<h1> Posts </h1>

<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>User</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->name}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>

@endsection

@section('footer')
    
@endsection