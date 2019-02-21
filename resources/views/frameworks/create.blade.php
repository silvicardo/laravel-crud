
@extends('layouts.layout')

@section('title','Create Framework');

@section('content')

<section  class="create frameworks container py-5">

  <h1>Add new Framework</h1>

  <form method="POST" action="{{ route('frameworks.store')}}">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" placeholder="New framework Name">
    </div>
    <div class="form-group">
      <label>Creator</label>
      <input type="text" class="form-control" name="creator" placeholder="New framework Creator">
    </div>
    <div class="form-group">
      <label>Language</label>
      <input type="text" class="form-control" name="language" placeholder="New framework Language">
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea class="form-control" name="description" placeholder="New framework Description" rows="8" cols="80"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit new framework</button>
  </form>

</section>

@endsection
