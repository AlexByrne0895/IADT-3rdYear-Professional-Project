@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Players Home
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">
                    <p><a class="btn btn-primary" href="{{ route('admin.players.create') }}">Create new Player</a></p>
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
                              <form action="{{ route('admin.players.destroy', $player->id)}}" method="POST">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <a class="btn btn-secondary" href="{{ route('admin.players.show', $player->id) }}">View</a>
                                  <a class="btn btn-warning" href="{{ route('admin.players.edit', $player->id) }}">Edit</a>
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
