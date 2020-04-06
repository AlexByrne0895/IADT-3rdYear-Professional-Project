@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Players
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">
                        <table>
                            <tbody>
                              <tr>
                                  <th>Name</th>
                                  <td>{{ $player->user->name }}</td>
                              </tr>
                              <tr>
                                  <th>Position</th>
                                  <td>{{ $player->position }}</td>
                              </tr>
                              <tr>
                                  <th>Date of birth</th>
                                  <td>{{ $player->date_of_birth }}</td>
                              </tr>
                              <tr>
                                  <th>Phone</th>
                                  <td>{{ $player->phone_number }}</td>
                              </tr>
                              <tr>
                                  <th>Address</th>
                                  <td>{{ $player->address }}</td>
                              </tr>
                              <tr>
                                  <th>Emergency number</th>
                                  <td>{{ $player->emergency_number }}</td>
                              </tr>
                              <tr>
                                  <th>Emergency name</th>
                                  <td>{{ $player->emergency_name }}</td>
                              </tr>
                              <tr>
                                  <th>Team</th>
                                  <td>
                                      <a class="btn btn-default" href="{{ route('admin.teams.show', $player->team->id) }}">{{ $player->team->name }}</a>
                                  </td>
                              </tr>
                              <tr>
                                  <th>Manager</th>
                                  <td>
                                      <a class="btn btn-default" href="{{ route('admin.managers.show', $player->team->manager->id) }}">{{ $player->team->manager->user->name }}</a>
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
