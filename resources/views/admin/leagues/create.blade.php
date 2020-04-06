@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new leagues
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.leagues.store') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><input type="text" name="name" value="{{ old('name') }}" /></td>
                                    <td>{{ ($errors->has('name')) ? $errors->first('name') : "" }}</td>
                                </tr>

                            </tbody>
                        </table>
                        <input type="submit" a class="btn btn-primary" value="Store" />
                        <a class="btn btn-secondary" href="{{ route('admin.leagues.index') }}">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
