@extends('layouts.app')
@section('title', 'Edit Pilot')
@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-semibold text-gray-900">Edit Pilot</h1>
    <p class="mt-1 text-sm text-gray-600">Update details for {{ $pilot->firstName }} {{ $pilot->lastName }}.</p>
</div>

<form action="{{ route('pilots.update', $pilot) }}" method="POST"
    class="rounded-lg bg-white p-6 shadow-sm ring-1 ring-gray-200">
    @include('pilots._form', ['pilot' => $pilot, 'method' => 'PUT', 'submitLabel' => 'Update'])
</form>
@endsection