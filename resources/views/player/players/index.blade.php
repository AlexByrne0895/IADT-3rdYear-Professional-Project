@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Players Home
                    <a class="btn btn-primary" href="{{ route('player.home') }}">Home</a>
                </div>

                <div class="card-body">
                    @if ($players->count() == 0)
                    <p>There are no players</p>
                    @else
                    <table>
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Team</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($players as $player)
                        <tr>
                          <td>{{ $player->user->name }}</td>
                          <td>{{ $player->position }}</td>
                          <td>{{ $player->team->name }}</td>
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
