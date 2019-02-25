@extends('layouts.layout')

@section('title','Students');

@section('content')

<section  class="students container py-5">

  <h1 class="mb-5">All Students</h1>

  {{ $allStudents->links() }}
  <table class="table text-center mt-5">
      <thead>
            <th>Name</th>
            <th>Last Name</th>
            <th>Class</th>
            <th></th>
            <th></th>
            <th></th>

      </thead>
      <tbody>
        @foreach ($allStudents as $student)
          <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->class }}</td>
            <td>
              <a class="btn btn-success" href="{{ route('students.show', $student->id)}}">Detail</a>
            </td>
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
        @endforeach
      </tbody>
    </table>

</section>

@endsection
