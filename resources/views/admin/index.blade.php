@extends('layouts.app')

@section('content')

<div class="container">

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold">

            Dashboard Athlete

        </h2>

        <a href="{{ route('admin.create') }}"
            class="btn btn-primary">

            + Add Athlete

        </a>

    </div>

    <div class="card shadow rounded-4 border-0">

        <div class="card-body">

            <table class="table align-middle table-hover">

                <thead>

                    <tr>

                        <th>Photo</th>

                        <th>Name</th>

                        <th>Sport</th>

                        <th>Earnings</th>

                        <th width="170">

                            Action

                        </th>

                    </tr>

                </thead>

                <tbody>

                @foreach($athletes as $athlete)

                <tr>

                    <td width="90">

                        <img
                        src="{{ asset('images/'.$athlete->photo) }}"
                        class="rounded"
                        width="70">

                    </td>

                    <td>

                        {{ $athlete->name }}

                    </td>

                    <td>

                        {{ $athlete->sport }}

                    </td>

                    <td>

                        {{ $athlete->earnings }}

                    </td>

                    <td>

                        <a
                        href="{{ route('admin.edit',$athlete) }}"
                        class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form
                        action="{{ route('admin.delete',$athlete) }}"
                        method="POST"
                        class="d-inline">

                            @csrf

                            @method('DELETE')

                            <button
                            onclick="return confirm('Delete Athlete?')"
                            class="btn btn-danger btn-sm">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection