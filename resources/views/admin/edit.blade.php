@extends('layouts.app')

@section('content')

<div class="container">

<div class="card shadow rounded-4">

<div class="card-body">

<h2>

Edit Athlete

</h2>

<form
action="{{ route('admin.update',$athlete) }}"
method="POST"
enctype="multipart/form-data">

@csrf

@method('PUT')

<input
type="text"
name="name"
value="{{ $athlete->name }}"
class="form-control mb-3">

<input
type="text"
name="sport"
value="{{ $athlete->sport }}"
class="form-control mb-3">

<input
type="text"
name="earnings"
value="{{ $athlete->earnings }}"
class="form-control mb-3">

<textarea
name="description"
class="form-control mb-3"
rows="5">{{ $athlete->description }}</textarea>

<img
src="{{ asset('images/'.$athlete->photo) }}"
width="150"
class="rounded mb-3">

<input
type="file"
name="photo"
class="form-control mb-4">

<button
class="btn btn-success">

Update Athlete

</button>

</form>

</div>

</div>

</div>

@endsection