@extends('layouts.admin')

@section('content')
<div class="container">
<form action="{{route('admin.posts.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Inserisci titolo">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" id="content"  cols="30" rows="10">{{old('content')}}</textarea>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="published">
    <label class="form-check-label"  {{old('published') ? 'checked' : ''}} for="published">Pubblicato</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection