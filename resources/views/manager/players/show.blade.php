@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Players
                    <a class="btn btn-primary" href="{{ route('manager.home') }}">Home</a>
                </div>

                <div class="card-body">
                        <table>
                            <tbody>
                              <tr>
                                  <th>Name</th>
                                  <td>{{ $players->user->name }}</td>
                              </tr>
                              <tr>
                                  <th>Position</th>
                                  <td>{{ $players->position }}</td>
                              </tr>
                              <tr>
                                  <th>Date of birth</th>
                                  <td>{{ $players->date_of_birth }}</td>
                              </tr>
                              <tr>
                                  <th>Phone</th>
                                  <td>{{ $players->phone_number }}</td>
                              </tr>
                              <tr>
                                  <th>Address</th>
                                  <td>{{ $players->address }}</td>
                              </tr>
                              <tr>
                                  <th>Emergency number</th>
                                  <td>{{ $players->emergency_number }}</td>
                              </tr>
                              <tr>
                                  <th>Emergency name</th>
                                  <td>{{ $players->emergency_name }}</td>
                              </tr>
                              <tr>
                                  <th>Team</th>
                                  <td>
                                      <a class="btn btn-default" href="{{ route('manager.teams.show', $players->team->id) }}">{{ $players->team->name }}</a>
                                  </td>
                              </tr>
                              <tr>
                                  <th>Manager</th>
                                  <td>
                                      <a class="btn btn-default" href="{{ route('manager.managers.show', $players->team->manager->id) }}">{{ $players->team->manager->user->name }}</a>
                                  </td>
                              </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
