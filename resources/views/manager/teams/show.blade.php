@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Teams
                    <a class="btn btn-primary" href="{{ route('manager.home') }}">Home</a>
                </div>

                <div class="card-body">
                    <table>
                        <tbody>
                          <tr>
                              <th>Name</th>
                              <td>{{ $teams->name }}</td>
                          </tr>
                          <tr>
                              <th>Phone</th>
                              <td>{{ $teams->phone }}</td>
                          </tr>
                          <tr>
                              <th>Address</th>
                              <td>{{ $teams->address }}</td>
                          </tr>
                          <tr>
                              <th>Manager</th>
                              <td>{{ $teams->manager->user->name }}</td>
                          </tr>
                          <tr>
                              <th>League</th>
                              <td>{{ $teams->league->name }}</td>
                          </tr>
                        </tbody>
                    </table>
                    <h3>Matches</h3>
                    @if ($teams->matches()->count() == 0)
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
                            @foreach ($teams->matches() as $match)
                            <tr>
                                <td>{{ $match->date }}</td>
                                <td>{{ $match->time }}</td>
                                <td>
                                  <a class="btn btn-secondary" href="{{ route('manager.matches.show', $match->id) }}">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    <h3>Players</h3>
                    @if ($teams->players->count() == 0)
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
                            @foreach ($teams->players as $player)
                            <tr>
                                <td>{{ $player->user->name }}</td>
                                <td>{{ $player->position }}</td>
                                <td>
                                  <a class="btn btn-secondary" href="{{ route('manager.players.show', $player->id) }}">View</a>
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
