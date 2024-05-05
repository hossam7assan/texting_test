@extends('layouts.app')
<h3>Choose the plan you'd like to Subscribe in :</h3>

<div class="row">
    @foreach($plans as $index => $plan)
        @if($index % 3 == 0)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="background-image: url('{{ $plan->background_image }}');">
                        <h5 class="card-title">{{ $plan->name }}</h5>
                        <p class="card-text">Price: {{ $plan->price }}</p>
                        <!-- Add other plan details here -->
                        {{-- <a href="{{ route('subscribe', $plan->id) }}" class="btn btn-primary">Subscribe</a> --}}
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="background-image: url('{{ $plan->background_image }}');">
                        <h5 class="card-title">{{ $plan->name }}</h5>
                        <p class="card-text">Price: {{ $plan->price }}</p>
                        <!-- Add other plan details here -->
                        {{-- <a href="{{ route('subscribe', $plan->id) }}" class="btn btn-primary">Subscribe</a> --}}
                    </div>
                </div>
            </div>
        @endif

        @if(($index + 1) % 3 == 0)
            </div><div class="row">
        @endif
    @endforeach
</div>
