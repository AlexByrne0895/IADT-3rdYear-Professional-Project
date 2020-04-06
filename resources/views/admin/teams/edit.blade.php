@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Teams Form
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.teams.update', $team->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><input type="text" name="name" value="{{ old('name', $team->name) }}" /></td>
                                    <td>{{ ($errors->has('name')) ? $errors->first('name') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Phone Number</th>
                                    <td><input type="text" name="phone" value="{{ old('phone',$team->phone) }}" /></td>
                                    <td>{{ ($errors->has('phone')) ? $errors->first('phone') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Address</th>
                                    <td><input type="text" name="address" value="{{ old('address', $team->address) }}" /></td>
                                    <td>{{ ($errors->has('address')) ? $errors->first('address') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Leagues</th>
                                    <td>
                                        <select name="league_id">
                                            @foreach ($leagues as $league)
                                            <option value="{{ $league->id }}" {{ (old('league_id', $team->league_id) == $league->id) ? 'selected' : '' }}>{{ $league->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>{{ ($errors->has('league_id')) ? $errors->first('league_id') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Managers</th>
                                    <td>
                                        <select name="manager_id">
                                            @foreach ($managers as $manager)
                                            <option value="{{ $manager->id }}" {{ (old('manager_id', $team->manager_id) == $manager->id) ? 'selected' : '' }}>{{ $manager->user->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>{{ ($errors->has('manager_id')) ? $errors->first('manager_id') : "" }}</td>
                                </tr>

                            </tbody>
                        </table>
                        <input type="submit" a class="btn btn-primary" value="Store" />
                        <a class="btn btn-secondary" href="{{ route('admin.teams.index') }}">Cancel</a>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
