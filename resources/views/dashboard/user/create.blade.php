@extends('dashboard.layouts.app')

@section('title')
    User
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">

        <div class="col-8 card card-primary mx-auto m-5">
            <div class="card-header">
                <h3 class="card-title">Create User</h3>
            </div>
            <form action="{{ route('dashboard.users.store') }}" method="POST">
                @csrf
                <div class="card-body">

                    @include('dashboard.layouts.inc.messages')

                    <div class="row">
                        <div class="form-group col">
                            <label for="first_name">First name</label>
                            <input type="text" id="first_name" name="first_name" @class(['form-control', 'is-invalid' => $errors->has('first_name')])
                                placeholder="Enter first_name ex: ahmed" value="{{ old('first_name') }}">
                            @error('first_name')
                                <span id="first_name-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="last_name">Last name</label>
                            <input type="text" id="last_name" name="last_name" @class(['form-control', 'is-invalid' => $errors->has('last_name')])
                                placeholder="Enter last_name ex: mohamed" value="{{ old('last_name') }}">
                            @error('last_name')
                                <span id="last_name-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" @class(['form-control', 'is-invalid' => $errors->has('email')])
                                placeholder="Enter email ex: mail@mail.com" value="{{ old('email') }}">
                            @error('email')
                                <span id="email-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group col">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" @class(['form-control', 'is-invalid' => $errors->has('phone')])
                                placeholder="Enter phone ex: 0111111555" value="{{ old('phone') }}">
                            @error('phone')
                                <span id="phone-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="password">password</label>
                            <input type="password" id="password" name="password" @class(['form-control', 'is-invalid' => $errors->has('password')])
                                placeholder="Enter password ex: strongPassword" value="{{ old('password') }}">
                            @error('password')
                                <span id="password-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="email">password confirmation</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                @class([
                                    'form-control',
                                    'is-invalid' => $errors->has('password_confirmation'),
                                ]) placeholder="Enter password confirmation ex: strongPassword"
                                value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <span id="password_confirmation-error"
                                    class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">


                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('dashboard/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
@endsection
