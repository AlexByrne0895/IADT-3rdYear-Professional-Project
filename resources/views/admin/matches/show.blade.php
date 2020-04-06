@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Matches
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">
                        <table>
                            <tbody>
                              <tr>

                                  <td>{{ $match->date }}</td>
                                  <td>{{ $match->time }}</td>
                                  <td><a class="btn btn-link" href="{{ route('admin.teams.show', $match->home_team->id) }}">{{ $match->home_team->name }}</a></td>
                                  <td>{{ ($match->home_team_score != null) ? $match->home_team_score . ' - ' . $match->away_team_score : ' v ' }}</td>
                                  <td><a class="btn btn-link" href="{{ route('admin.teams.show', $match->away_team->id) }}">{{ $match->away_team->name }}</a></td>
                              </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
