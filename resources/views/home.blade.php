@extends('layouts.app')

@section('content')
    <h1>home</h1>
    <ul>
        @foreach ($houses as $house)
            <li> {{ $house->title }} </li>
        @endforeach
    </ul>
@endsection
