
@extends('layouts.layout')

@section('title','Update Framework');

@section('content')

<section  class="edit frameworks container py-5">

  <h1>Edit {{ $framework->name}}</h1>

  <form method="POST" action="{{ route('frameworks.update', $framework)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" value="{{ $framework->name }}">
    </div>
    <div class="form-group">
      <label>Creator</label>
      <input type="text" class="form-control" name="creator" value="{{ $framework->creator }}">
    </div>
    <div class="form-group">
      <label>Language</label>
      <input type="text" class="form-control" name="language" value="{{ $framework->language }}">
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea class="form-control" name="description" rows="8" cols="80">{{ $framework->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit your changes</button>
  </form>

</section>

@endsection
