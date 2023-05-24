@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <ul class="py-3">
            <li class="d-flex justify-content-start text-uppercase fw-semibold">
                <div>
                    <p>Agency</p>
                </div>
                <div>
                    <p>departure_station</p>
                </div>
                <div>
                    <p>arrival_station</p>
                </div>
                <div>
                    <p>departure_time</p>
                </div>
                <div>
                    <p>arrival_time</p>
                </div>
                <div>
                    <p>train_code</p>
                </div>
                <div>
                    <p>number_of_carriages</p>
                </div>
                <div>
                    <p>in_time</p>
                </div>
                <div>
                    <p>deleted</p>
                </div>
            </li>
            @foreach ($trains as $train)
                <li class="d-flex justify-content-start text-white fw-semibold">
                    <div>
                        <p class="text-capitalize">{{ $train->agency }}</p>
                    </div>
                    <div>
                        <p>{{ $train->departure_station }}</p>
                    </div>
                    <div>
                        <p>{{ $train->arrival_station }}</p>
                    </div>
                    <div>
                        <p>{{ $train->departure_time }}</p>
                    </div>
                    <div>
                        <p>{{ $train->arrival_time }}</p>
                    </div>
                    <div>
                        <p>{{ $train->train_code }}</p>
                    </div>
                    <div>
                        <p>{{ $train->number_of_carriages }}</p>
                    </div>
                    <div>
                        <p>{{ $train->in_time }}</p>
                    </div>
                    <div style="background-color: {{ $train->deleted ? 'green' : 'red' }}">
                        <p class="text-capitalize {{ $train->deleted ? 'deleted' : 'not-deleted' }}">
                            {{ $train->deleted ? 'not deleted' : 'deleted' }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
