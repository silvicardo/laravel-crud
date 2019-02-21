@extends('layouts.layout')

@section('title','Frameworks');

@section('content')

<section  class="frameworks container py-5">

  <h1>All Frameworks</h1>
  <table class="table text-center">
      <thead>
            <th>Name</th>
            <th></th>
            <th></th>
            <th></th>

      </thead>
      <tbody>
        @foreach ($allFrameworks as $framework)
          <tr>
                <td>{{ $framework->name }}</td>
            <td>
              <a class="btn btn-success" href="{{ route('frameworks.show', $framework->id)}}">Detail</a>
            </td>
            <td>
              <a class="btn btn-warning"href="{{ route('frameworks.edit', $framework)}}">Edit</a>
            </td>
            <td>
              <form action="{{ route('frameworks.destroy', $framework->id)}}" method="POST">
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
