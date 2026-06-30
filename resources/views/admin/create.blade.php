@extends('layouts.app')

@section('content')

<div class="container">

<div class="card shadow rounded-4">

<div class="card-body">

<h2 class="mb-4">

Add Athlete

</h2>

<form
action="{{ route('admin.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div class="mb-3">

<label>Name</label>

<input
type="text"
name="name"
class="form-control">

</div>

<div class="mb-3">

<label>Sport</label>

<input
type="text"
name="sport"
class="form-control">

</div>

<div class="mb-3">

<label>Earnings</label>

<input
type="text"
name="earnings"
class="form-control">

</div>

<div class="mb-3">

<label>Description</label>

<textarea
name="description"
rows="5"
class="form-control"></textarea>

</div>

<div class="mb-4">

<label>Photo</label>

<input
type="file"
name="photo"
class="form-control">

</div>

<button
class="btn btn-primary">

Save Athlete

</button>

</form>

</div>

</div>

</div>

@endsection