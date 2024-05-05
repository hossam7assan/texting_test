@extends('dashboard.layouts.app')

@section('title', 'Admin')

@section('css')
    <style>
        .bg-custom {
            background-color: rgba(195, 195, 195, 0.2);
            border-radius: 6px;
        }

        .section-bg {
            background-color: rgba(170, 223, 252, 0.2);
            border-radius: 6px;
            padding: 15px;
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mx-auto mt-5">
                @include('dashboard.layouts.inc.messages')
                <div class="card-body">
                    <section class="mb-4 section-bg">
                        @include('dashboard.layouts.partial.edit-btn', [
                            'route' => route('dashboard.users.edit', $user),
                        ])
                        <br>
                        <h6 class="font-weight-bold mt-5">Main Info</h6>
                        <ul class="list-unstyled px-5">
                            <li><strong>Frist name:</strong> {{ $user->first_name }}</li>
                            <li><strong>Last name:</strong> {{ $user->last_name }}</li>
                            <li><strong>Email:</strong> {{ $user->email }}</li>
                            <li><strong>PHone:</strong> {{ $user->phone }}</li>
                            <li><strong>Country:</strong> {{ $user->timezone->country->name }}</li>
                            <li><strong>TimeZone:</strong> {{ $user->timezone->name }}</li>
                        </ul>
                    </section>

                    <section class="mb-4 section-bg">
                        <h6 class="font-weight-bold">Subscriptions</h6>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Plan</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Payment ID</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user->subscriptions as $index => $subscription)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $subscription->plan->name }}</td>
                                            <td>{{ $subscription->start_at }}</td>
                                            <td>{{ $subscription->end_at }}</td>
                                            <td>{{ $subscription->payment_id }}</td>
                                            <td>{{ $subscription->status ? 'Active' : 'Inactive' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('dashboard/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
@endsection
