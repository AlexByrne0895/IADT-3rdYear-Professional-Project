@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Leagues
                    <a class="btn btn-primary" href="{{ route('player.home') }}">Home</a>

                </div>

                <div class="card-body">
                        <table>
                            <tbody>
                              <tr>
                                  <th>League Name:</th>
                                  <td>{{ $league->name }}</td>
                              </tr>
                            </tbody>
                        </table>
                        @if ($league->teams->count() == 0)
                        <p>There are no teams in this league</p>
                        @else
                        <table>
                          <thead>
                            <tr>
                              <th>Team Name:</td>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($league->teams as $team)
                            <tr>
                              <td>{{ $team->name }}</td>
                              
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
