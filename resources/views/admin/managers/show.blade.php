@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Managers
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">
                        <table>
                            <tbody>
                              <tr>
                                  <th>Name</th>
                                  <td>{{ $manager->user->name }}</td>
                              </tr>
                              <tr>
                                  <th>Email</th>
                                  <td>{{ $manager->user->email }}</td>
                              </tr>
                              <tr>
                                  <th>Phone</th>
                                  <td>{{ $manager->phone_number }}</td>
                              </tr>
                              <tr>
                                  <th>Address</th>
                                  <td>{{ $manager->address }}</td>
                              </tr>
                            </tbody>
                        </table>
                        @if ($manager->teams->count() == 0)
                        <p>There are no team assigned to this manager</p>
                        @else
                        <table>
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($manager->teams as $team)
                            <tr>
                              <td>{{ $team->name }}</td>
                              <td>
                                <a class="btn btn-secondary" href="{{ route('admin.teams.show', $team->id) }}">View</a>
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
