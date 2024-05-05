@extends('dashboard.layouts.app')

@section('title')
    User
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">

        <div class="col-10 card card-primary mx-auto m-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('dashboard.layouts.inc.success')
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th style="width: 20px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="d-flex">
                                        @include('dashboard.layouts.partial.show-btn', [
                                            'route' => route('dashboard.users.show', $user),
                                        ])

                                        @include('dashboard.layouts.partial.edit-btn', [
                                            'route' => route('dashboard.users.edit', $user),
                                        ])

                                        @include('dashboard.layouts.partial.delete-form', [
                                            'route' => route('dashboard.users.destroy', $user),
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
