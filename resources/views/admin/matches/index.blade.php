@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Match Home
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">
                    <p><a class="btn btn-primary" href="{{ route('admin.matches.create') }}">Create new Match</a></p>
                    @if ($matches->count() == 0)
                    <p>There are no matches</p>
                    @else
                    <table>
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Home team</th>
                          <th>Away team</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($matches as $match)
                        <tr>
                          <td>{{ $match->date }}</td>
                          <td>{{ $match->time }}</td>
                          <td><a class="btn btn-link" href="{{ route('admin.teams.show', $match->home_team->id) }}">{{ $match->home_team->name }}</a></td>
                          <td><a class="btn btn-link" href="{{ route('admin.teams.show', $match->away_team->id) }}">{{ $match->away_team->name }}</a></td>

                          <td>
                              <form action="{{ route('admin.matches.destroy', $match->id)}}" method="POST">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <a class="btn btn-secondary" href="{{ route('admin.matches.show', $match->id) }}">View</a>
                                  <a class="btn btn-warning" href="{{ route('admin.matches.edit', $match->id) }}">Edit</a>
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
