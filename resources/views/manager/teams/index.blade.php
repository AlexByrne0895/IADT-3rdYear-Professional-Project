@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Teams
                    <a class="btn btn-primary" href="{{ route('manager.home') }}">Home</a>
                </div>

                <div class="card-body">
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
                            <a class="btn btn-secondary" href="{{ route('manager.teams.show', $team->id) }}">View</a>
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
