@extends('templates.master')

@section('title')
User List Page
@endsection

@section('content')

List of Registrants Here
<ul>
    @foreach($apps as $thisApp)

    <li><a href='/details?id={{ $thisApp[' id']}}'> {{$thisApp['title'] }}</li></a>

    @endforeach
</ul>

@endsection