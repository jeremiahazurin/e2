@extends('templates.master')

@section('title')
Product Not Found
@endsection

@section('content')
<h2>Product {{ $id }} is not found</h2>

<p>
    Uh oh - we were not able to find the product that you were looking for!
</p>

<a href='/products'>&larr; Return to all products</a>


@endsection