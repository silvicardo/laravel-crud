
@extends('layouts.layout')

@section('title','Update Student');

@section('content')

<section  class="edit students container py-5">

  <h1>Edit {{ $student->name}} {{ $student->lastname}}</h1>

  <form method="POST" action="{{ route('students.update', $student)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" placeholder="New student Name" value="{{ $student->name }}">
    </div>
    <div class="form-group">
      <label>Last Name</label>
      <input type="text" class="form-control" name="lastname" placeholder="New student Creator" value="{{ $student->lastname }}">
    </div>
    <div class="form-group">
      <label>Date of birth</label>
      <input type="date" class="form-control" name="date_of_birth" min="1998-01-01" max="2006-12-31" value="{{ $student->date_of_birth }}">
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" name="gender">
            <option value="">---</option>
            <option value="m" {{ ('m' == $student->gender) ? ' selected' : null }}>M</option>
            <option value="f" {{ ('f' == $student->gender) ? ' selected' : null }}>F</option>
        </select>
    </div>
    <div class="form-group">
        <label for="class">Class</label>
        <select class="form-control" name="class">
            <option value="">---</option>
            <option value="1" {{ ('1' == $student->class) ? ' selected' : null }}>1</option>
            <option value="2" {{ ('2' == $student->class) ? ' selected' : null }}>2</option>
            <option value="3" {{ ('3' == $student->class) ? ' selected' : null }}>3</option>
            <option value="4" {{ ('4' == $student->class) ? ' selected' : null }}>4</option>
            <option value="5" {{ ('5' == $student->class) ? ' selected' : null }}>5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit your changes</button>
  </form>

</section>
@endsection
