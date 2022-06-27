@extends('layouts.admin')

@section('content')
<div class="container">
  <h1>{{$post->title}}</h1>
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$post->title}}</h5>
      <p class="card-text">{{$post->content}}</p>
      <p class="card-text">Pubblicato: {{$post->published}}</p>
      <small>{{$post->created_at}}</small>
    </div>
  </div>
</div>
@endsection