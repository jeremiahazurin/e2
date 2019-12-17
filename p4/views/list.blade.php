@extends('templates.master')

@section('title')
User List Page
@endsection

@section('content')

List of Registrants Here
<ul>
    @foreach($apps as $app)

    <li>{{ $app['title'] }}</li>

    @endforeach
</ul>

@endsection