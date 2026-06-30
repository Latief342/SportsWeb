@extends('layouts.app')

@section('content')

<div class="row">

<div class="col-lg-5">

<img

src="{{ asset('images/'.$athlete->photo) }}"

class="img-fluid rounded-4 shadow">

</div>

<div class="col-lg-7">

<h1>

{{ $athlete->name }}

</h1>

<span class="badge bg-primary fs-6">

{{ $athlete->sport }}

</span>

<h2 class="text-success mt-4">

{{ $athlete->earnings }}

</h2>

<p class="mt-4">

{{ $athlete->description }}

</p>

<a

href="/"

class="btn btn-primary">

← Back

</a>

</div>

</div>

@endsection