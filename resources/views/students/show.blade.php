
@extends('layouts.layout')

@section('title','Show Student');

@section('content')

<section  class="show students container py-5">

  <table class="table">
      <thead>
          @foreach ($student->first()->getAttributes() as $attribute => $value)
            <th>{{ $attribute }}</th>
          @endforeach
          <th></th>
          <th></th>
      </thead>
      <tbody>
          <tr>
            @foreach ($student->getAttributes() as $attribute => $value)
                <td>{{ $value }}</td>
            @endforeach
            <td>
              <a class="btn btn-warning"href="{{ route('students.edit', $student)}}">Edit</a>
            </td>
            <td>
              <form action="{{ route('students.destroy', $student->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
      </tbody>
    </table>


</section>

@endsection
