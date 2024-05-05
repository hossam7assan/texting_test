@extends('dashboard.layouts.app')

@section('title')
    Plan
@endsection

@section('css')
@endsection

@section('content')
    <div class="row">

        <div class="col-8 card card-primary mx-auto m-5">
            <div class="card-header">
                <h3 class="card-title">Create Plan</h3>
            </div>
            <form action="{{ route('dashboard.plans.store') }}" method="POST">
                @csrf
                <div class="card-body">

                    @include('dashboard.layouts.inc.messages')

                    <div class="row">
                        <div class="form-group col">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" @class(['form-control', 'is-invalid' => $errors->has('name')])
                                placeholder="Enter name ex: premium" value="{{ old('name') }}">
                            @error('name')
                                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="price">Price</label>
                            <input type="number" id="price" name="price" @class(['form-control', 'is-invalid' => $errors->has('price')])
                                placeholder="Enter price ex: 500" value="{{ old('price') }}">
                            @error('price')
                                <span id="price-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label for="messages">Messages</label>
                            <input type="number" id="messages" name="messages" @class(['form-control', 'is-invalid' => $errors->has('messages')])
                                placeholder="Enter messages ex: 5" value="{{ old('messages') }}">
                            @error('messages')
                                <span id="messages-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col">
                            <label for="textwords">Text words</label>
                            <input type="number" id="textwords" name="textwords" @class(['form-control', 'is-invalid' => $errors->has('textwords')])
                                placeholder="Enter textwords ex: 5" value="{{ old('textwords') }}">
                            @error('textwords')
                                <span id="textwords-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <div class="mb-3 form-check">
                                <input type="checkbox" @class(['form-check-input', 'is-invalid' => $errors->has('rollover')]) name="rollover" id="rollover"
                                    @checked(old('rollover', true))>
                                <label class="form-check-label" for="rollover">rollover</label>
                                @error('rollover')
                                    <span id="rollover-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col">
                            <div class="mb-3 form-check">
                                <input type="checkbox" @class(['form-check-input', 'is-invalid' => $errors->has('contacts')]) name="contacts" id="contacts"
                                    @checked(old('contacts', true))>
                                <label class="form-check-label" for="contacts">contacts</label>
                                @error('contacts')
                                    <span id="contacts-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


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
