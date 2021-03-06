@extends('layouts.main')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-4 text-gray-800">Users</h1>
</div>
<div class="row">
    <div class="card mx-auto">
        <div class="card-header">
            <a href="{{route('users.create')}}" class="float-right">Create</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>

                <tbody>
                    <!--Iterate the users model in the forEach loop below-->
                    @foreach($users as $user)
                    <tr>
                        <th scope="row">
                            {{$user->id}}
                        </th>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>EDIT/DELETE</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>
@endsection