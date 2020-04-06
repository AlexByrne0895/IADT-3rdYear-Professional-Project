@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Manager Form
                    <a class="btn btn-primary" href="{{ route('admin.home') }}">Home</a>

                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.managers.update', $manager->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><input type="text" name="name" value="{{ old('name', $manager->user->name) }}" /></td>
                                    <td>{{ ($errors->has('name')) ? $errors->first('name') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td><input type="text" name="email" value="{{ old('email', $manager->user->email) }}" /></td>
                                    <td>{{ ($errors->has('email')) ? $errors->first('email') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Phone Number</th>
                                    <td><input type="text" name="phone_number" value="{{ old('phone_number', $manager->phone_number) }}" /></td>
                                    <td>{{ ($errors->has('phone_number')) ? $errors->first('phone_number') : "" }}</td>
                                </tr>

                                <tr>
                                    <th>Address</th>
                                    <td><input type="text" name="address" value="{{ old('address', $manager->address) }}" /></td>
                                    <td>{{ ($errors->has('address')) ? $errors->first('address') : "" }}</td>
                                </tr>

                            </tbody>
                        </table>
                        <input type="submit" a class="btn btn-primary" value="Store" />
                        <a class="btn btn-secondary" href="{{ route('admin.managers.index') }}">Cancel</a>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
