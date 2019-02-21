
@extends('layouts.layout')

@section('title','Show Framework');

@section('content')

<section  class="show frameworks container py-5">

  <table class="table">
      <thead>
          @foreach ($framework->first()->getAttributes() as $attribute => $value)
            <th>{{ $attribute }}</th>
          @endforeach
          <th></th>
          <th></th>
      </thead>
      <tbody>
          <tr>
            @foreach ($framework->getAttributes() as $attribute => $value)
                <td>{{ $value }}</td>
            @endforeach
            <td>
              <a class="btn btn-warning"href="{{ route('frameworks.edit', $framework->id)}}">Edit</a>
            </td>
            <td>
              <form action="{{ route('frameworks.destroy', $framework->id)}}" method="POST">
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
