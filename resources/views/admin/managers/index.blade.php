@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Managers
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>


                </div>

                <div class="card-body">
                    <p><a class="btn btn-primary" href="{{ route('admin.managers.create') }}">Create new manager</a></p>
                    @if ($managers->count() == 0)
                    <p>There are no managers</p>
                    @else
                    <table>
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Teams</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($managers as $manager)
                        <tr>
                          <td>{{ $manager->user->name }}</td>
                          <td>{{ $manager->teams->count() }}</td>
                          <td>
                              <form action="{{ route('admin.managers.destroy', $manager->id)}}" method="POST">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <a class="btn btn-secondary" href="{{ route('admin.managers.show', $manager->id) }}">View</a>
                                  <a class="btn btn-warning" href="{{ route('admin.managers.edit', $manager->id) }}">Edit</a>
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
