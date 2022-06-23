@extends('layouts.admin');

@section('content')
<a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea nuovo post</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Creation Date</th>
        <th scope="col">Modifica</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
      <tr>
        <td><a href="{{route('admin.posts.show',$post->id)}}"></a>{{$post->id}}</td>
        <td><a href="{{route('admin.posts.show',$post->id)}}"></a>{{$post->title}}</td>
        <td>{{$post->created_at}}</td>
        <td><a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-primary">Modifica</a></td>
      </tr>
      @endforeach
    </tbody>
</table>
@endsection