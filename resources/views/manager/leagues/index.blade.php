@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Leagues
                    <a class="btn btn-primary" href="{{ route('manager.home') }}">Home</a>
                </div>

                <div class="card-body">
                    @if ($leagues->count() == 0)
                    <p>There are no leagues</p>
                    @else
                    <table>
                      <thead>
                        <tr>
                          <th>League Name</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($leagues as $league)
                        <tr>
                          <td>{{ $league->name }}</td>
                          <td>
                                <a class="btn btn-secondary" href="{{ route('manager.leagues.show', $league->id) }}">View</a>
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
