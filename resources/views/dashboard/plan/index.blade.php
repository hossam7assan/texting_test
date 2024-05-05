@extends('dashboard.layouts.app')

@section('title')
    Plan
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">

        <div class="col-10 card card-primary mx-auto m-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Plans</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @include('dashboard.layouts.inc.success')
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th style="width: 20px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plans as $plan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->price }}</td>
                                    <td class="d-flex">
                                        @include('dashboard.layouts.partial.edit-btn', [
                                            'route' => route('dashboard.plans.edit', $plan),
                                        ])

                                        @include('dashboard.layouts.partial.delete-form', [
                                            'route' => route('dashboard.plans.destroy', $plan),
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
