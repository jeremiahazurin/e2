@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')
<!--
    <h2>{{ $welcome }}</h2>
    <p>Hello and welcome! This is the boilerplate splash page for my application built with  <a href='https://github.com/susanBuck/e2framework'>e2framework</a>.</p>
    -->

@if($newTitle)
Thank you for signing up {{$newTitle}}!
@endif

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<br>
<a href='/list'> View All Registrants</a>
<h3>
    Register for the Conference Below:
</h3>
<form method='POST' action='/save-new-applicants'>
    <label for='title'> Name:</label>
    <input type='text' id='title' name='title' value='{{$app->old(' title')}}'>
    </br></br>

    <label for='content'> Email:</label>
    <textarea id='content' name='content'> {{$app->old(' content')}}</textarea>
    </br></br>
    <p>

        <button type='submit'> Register
        </button>

</form>
@endsection