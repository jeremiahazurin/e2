@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')
<!--
    <h2>{{ $welcome }}</h2>
    <p>Hello and welcome! This is the boilerplate splash page for my application built with  <a href='https://github.com/susanBuck/e2framework'>e2framework</a>.</p>
    -->
<h3>
    Register for the Conference Below:
</h3>
<form>
    <label>
        Name: <input type='text'>
    </label> </br></br>
    <label>
        Email: <input type='text'>
    </label></br></br>
    <p>
        Type of Registrant:
    </p>
    <input type="radio" name="sponsor" value="male"> Sponsor
    <input type="radio" name="student" value="female"> Student
    </br></br>
    <button type='submit'> Register
    </button>

</form>
@endsection