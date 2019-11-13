@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')


<h2>All Products</h2>
@foreach
($products as $product)
{{$product['name']}}
@endforeach

@endsection