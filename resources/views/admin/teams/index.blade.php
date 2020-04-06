@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Teams
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">
                    <p><a class="btn btn-primary" href="{{ route('admin.teams.create') }}">Create new Team</a></p>
                    @if ($teams->count() == 0)
                    <p>There are no teams</p>
                    @else
                    <table>
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Players</th>
                          <th>Manager</th>
                          <th>League</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($teams as $team)
                        <tr>
                          <td>{{ $team->name }}</td>
                          <td>{{ $team->players->count() }}</td>
                          <td>{{ $team->manager->user->name }}</td>
                          <td>{{ $team->league->name }}</td>
                          <td>
                              <form action="{{ route('admin.teams.destroy', $team->id)}}" method="POST">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <a class="btn btn-secondary" href="{{ route('admin.teams.show', $team->id) }}">View</a>
                                  <a class="btn btn-warning" href="{{ route('admin.teams.edit', $team->id) }}">Edit</a>
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
