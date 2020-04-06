@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new Players
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.players.store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><input type="text" name="name" value="{{ old('name') }}" /></td>
                                    <td>{{ ($errors->has('name')) ? $errors->first('name') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td><input type="text" name="email" value="{{ old('email') }}" /></td>
                                    <td>{{ ($errors->has('email')) ? $errors->first('email') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Position</th>
                                    <td><input type="text" name="position" value="{{ old('position') }}" /></td>
                                    <td>{{ ($errors->has('position')) ? $errors->first('position') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Date Of Birth</th>
                                    <td><input type="text" name="date_of_birth" placeholder="yyy-mm-dd" value="{{ old('date_of_birth') }}" /></td>
                                    <td>{{ ($errors->has('date_of_birth')) ? $errors->first('date_of_birth') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Phone Number</th>
                                    <td><input type="text" name="phone_number" value="{{ old('phone_number') }}" /></td>
                                    <td>{{ ($errors->has('phone_number')) ? $errors->first('phone_number') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Address</th>
                                    <td><input type="text" name="address" value="{{ old('address') }}" /></td>
                                    <td>{{ ($errors->has('address')) ? $errors->first('address') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Emergency Name</th>
                                    <td><input type="text" name="emergency_name" value="{{ old('emergency_name') }}" /></td>
                                    <td>{{ ($errors->has('emergency_name')) ? $errors->first('emergency_name') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Emergency Contact</th>
                                    <td><input type="text" name="emergency_number" value="{{ old('emergency_number') }}" /></td>
                                    <td>{{ ($errors->has('emergency_number')) ? $errors->first('emergency_number') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Teams</th>
                                    <td>
                                        <select name="team_id">
                                            @foreach ($teams as $team)
                                            <option value="{{ $team->id }}" {{ (old('team_id') == $team->id) ? 'selected' : '' }}>{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>{{ ($errors->has('team_id')) ? $errors->first('team_id') : "" }}</td>
                                </tr>


                            </tbody>
                        </table>
                        <input type="submit" a class="btn btn-primary" value="Store" />
                        <a class="btn btn-secondary" href="{{ route('admin.players.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
