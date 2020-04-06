@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Teams
                    <a class="btn btn-primary" href="{{ route('player.home') }}">Home</a>
                </div>

                <div class="card-body">
                    <table>
                        <tbody>
                          <tr>
                              <th>Name</th>
                              <td>{{ $team->name }}</td>
                          </tr>
                          <tr>
                              <th>Phone</th>
                              <td>{{ $team->phone }}</td>
                          </tr>
                          <tr>
                              <th>Address</th>
                              <td>{{ $team->address }}</td>
                          </tr>
                          <tr>
                              <th>Manager</th>
                              <td>{{ $team->manager->user->name }}</td>
                          </tr>
                          <tr>
                              <th>League</th>
                              <td>{{ $team->league->name }}</td>
                          </tr>
                        </tbody>
                    </table>
                    <h3>Matches</h3>
                    @if ($team->matches()->count() == 0)
                    <p>There are no matches for this team</p>
                    @else
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>time</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($team->matches() as $match)
                            <tr>
                                <td>{{ $match->date }}</td>
                                <td>{{ $match->time }}</td>
                                <td>
                                  <a class="btn btn-secondary" href="{{ route('player.matches.show', $match->id) }}">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    <h3>Players</h3>
                    @if ($team->players->count() == 0)
                    <p>There are no players for this team</p>
                    @else
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($team->players as $player)
                            <tr>
                                <td>{{ $player->user->name }}</td>
                                <td>{{ $player->position }}</td>
                                <td>
                                  <a class="btn btn-secondary" href="{{ route('player.players.show', $player->id) }}">View</a>
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
