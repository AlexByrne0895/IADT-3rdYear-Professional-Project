@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Leagues
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">
                    <p><a class="btn btn-primary" href="{{ route('admin.leagues.create') }}">Create new league</a></p>
                    @if ($leagues->count() == 0)
                    <p>There are no leagues</p>
                    @else
                    <table>
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($leagues as $league)
                        <tr>
                          <td>{{ $league->name }}</td>
                          <td>
                            <form action="{{ route('admin.leagues.destroy', $league->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a class="btn btn-secondary" href="{{ route('admin.leagues.show', $league->id) }}">View</a>
                                <a class="btn btn-warning" href="{{ route('admin.leagues.edit', $league->id) }}">Edit</a>
                                <button class="btn btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
