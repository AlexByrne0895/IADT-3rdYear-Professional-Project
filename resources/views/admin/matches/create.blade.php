@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new Matches
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.matches.store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Date</th>
                                    <td><input type="text" name="date" value="{{ old('date') }}" /></td>
                                    <td>{{ ($errors->has('date')) ? $errors->first('date') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Time</th>
                                    <td><input type="text" name="time" value="{{ old('time') }}" /></td>
                                    <td>{{ ($errors->has('time')) ? $errors->first('time') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Home team</th>
                                    <td>
                                        <select name="home_team_id">
                                            @foreach ($teams as $team)
                                            <option value="{{ $team->id }}" {{ (old('home_team_id') == $team->id) ? 'selected' : '' }}>{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>{{ ($errors->has('home_team_id')) ? $errors->first('home_team_id') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Away team</th>
                                    <td>
                                        <select name="away_team_id">
                                            @foreach ($teams as $team)
                                            <option value="{{ $team->id }}" {{ (old('away_team_id') == $team->id) ? 'selected' : '' }}>{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>{{ ($errors->has('away_team_id')) ? $errors->first('away_team_id') : "" }}</td>
                                </tr>

                            </tbody>
                        </table>
                        <input type="submit" a class="btn btn-primary" value="Store" />
                        <a class="btn btn-secondary" href="{{ route('admin.matches.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
