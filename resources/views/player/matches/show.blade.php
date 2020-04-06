@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Matches
                    <a class="btn btn-primary" href="{{ route('player.home') }}">Home</a>
                </div>

                <div class="card-body">
                        <table>
                            <tbody>
                              <tr>
                                  <td>{{ $matches->date }}</td>
                                  <td>{{ $matches->time }}</td>
                                  <td><a class="btn btn-link" href="{{ route('player.teams.show', $matches->home_team->id) }}">{{ $matches->home_team->name }}</a></td>
                                  <td>{{ ($matches->home_team_score != null) ? $matches->home_team_score . ' - ' . $matches->away_team_score : ' v ' }}</td>
                                  <td><a class="btn btn-link" href="{{ route('player.teams.show', $matches->away_team->id) }}">{{ $matches->away_team->name }}</a></td>
                              </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
