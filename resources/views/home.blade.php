@extends('layouts.app')

@section('content')
    <h1>home</h1>
    <ul>
        @foreach ($trains as $train)
            <li> {{ $train->agency }} </li>
            <li> {{ $train->departure_station }} </li>
        @endforeach
    </ul>
@endsection
