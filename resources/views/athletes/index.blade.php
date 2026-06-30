@extends('layouts.app')

@section('content')

<div class="bg-primary rounded-4 p-5 text-white shadow mb-5">

    <h1 class="display-5 fw-bold">

        🏆 Top Athletes

    </h1>

    <p>

        Discover the world's highest-paid athletes.

    </p>

    <form>

        <div class="input-group mt-4">

            <input

                class="form-control"

                name="search"

                placeholder="Search athlete..."

                value="{{ request('search') }}">

            <button class="btn btn-warning">

                Search

            </button>

        </div>

    </form>

</div>

<div class="row">

@foreach($athletes as $athlete)

<div class="col-lg-4 mb-4">

<div class="card shadow border-0 rounded-4 h-100">

<img
src="{{ asset('images/'.$athlete->photo) }}"
class="card-img-top"
style="height:260px;object-fit:cover;">

<div class="card-body">

<h4>

{{ $athlete->name }}

</h4>

<span class="badge bg-primary">

{{ $athlete->sport }}

</span>

<h4 class="text-success mt-3">

{{ $athlete->earnings }}

</h4>

<a

href="{{ route('athlete.show',$athlete) }}"

class="btn btn-primary w-100 mt-3">

View Detail

</a>

</div>

</div>

</div>

@endforeach

</div>

<div>

{{ $athletes->links() }}

</div>

@endsection