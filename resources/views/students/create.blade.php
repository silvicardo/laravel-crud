
@extends('layouts.layout')

@section('title','Create Student');

@section('content')

<section  class="create students container py-5">

  <h1>Add new Student</h1>

  <form method="POST" action="{{ route('students.store')}}">
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" placeholder="New student Name">
    </div>
    <div class="form-group">
      <label>Last Name</label>
      <input type="text" class="form-control" name="lastname" placeholder="New student Last Name">
    </div>
    <div class="form-group">
      <label>Date of birth</label>
      <input type="date" class="form-control" name="date_of_birth" value="2000-01-01" min="1998-01-01" max="2006-12-31">
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" name="gender">
            <option value="">---</option>
            <option value="m">M</option>
            <option value="f">F</option>
        </select>
    </div>
    <div class="form-group">
        <label for="class">Class</label>
        <select class="form-control" name="class">
            <option value="">---</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit new Student</button>
  </form>

</section>

@endsection
