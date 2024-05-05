@extends('layouts.bootstrap')
<div class="container p-5">
    <h3>Choose the plan you'd like to Subscribe in :</h3>
    <div class="row">
        @foreach ($plans as $index => $plan)
            @if ($index % 3 == 0)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" style="background-image: url('{{ $plan->background_image }}');">
                            <h5 class="card-title">{{ $plan->name }}</h5>
                            <p class="card-text">Price: {{ $plan->price }}</p>
                            <p class="card-text">{{ $plan->messages }} Messages</p>
                            <p class="card-text">{{ $plan->textwords }} Textwords </p>
                            <p class="card-text">{{ $plan->rollover ? 'Rollover Texts' : '' }} </p>
                            <!-- Add other plan details here -->
                            <form action="{{ route('subscribe.store', $plan->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
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
                            <p class="card-text">{{ $plan->messages }} Messages </p>
                            <p class="card-text">{{ $plan->textwords }} Textwords </p>
                            <p class="card-text">{{ $plan->rollover ? 'Rollover Texts' : '' }} </p>
                            <!-- Add other plan details here -->
                            <form action="{{ route('subscribe.store', $plan->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                            {{-- <a href="{{ route('subscribe', $plan->id) }}" class="btn btn-primary">Subscribe</a> --}}
                        </div>
                    </div>
                </div>
            @endif

            @if (($index + 1) % 3 == 0)
    </div>
    <div class="row">
        @endif
        @endforeach
    </div>
</div>
