@extends('layouts.app')
@section('title', $pilot->firstName . ' ' . $pilot->lastName)
@section('content')
<div class="wrap">
    <div class="mb-6 flex items-center justify-end">
        <div class="flex gap-2 p-3">
            <a href="{{ route('pilots.edit', $pilot) }}"
                class="rounded-md border border-gray-300 px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-50">Edit</a>
            <a href="{{ route('pilots.index') }}"
                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-100">Back</a>
            <form action="{{ route('pilots.destroy', $pilot) }}" method="POST"
                onsubmit="return confirm('Delete this pilot?')">
                @csrf @method('DELETE')
                <button type="submit"
                    class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white hover:bg-red-500">Delete</button>
            </form>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-3">
        <div class="rounded-lg bg-white p-6 shadow-sm ring-1 ring-gray-200 lg:col-span-6">
            <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <dt class="text-sm font-medium text-gray-500">First Name</dt>
                    <dd class="mt-1 text-gray-900">{{ $pilot->firstName }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Last Name</dt>
                    <dd class="mt-1 text-gray-900">{{ $pilot->lastName }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Email</dt>
                    <dd class="mt-1 text-gray-900">{{ $pilot->email }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Age</dt>
                    <dd class="mt-1 text-gray-900">{{ $pilot->age }}</dd>
                </div>
                <div>
                    <dt class="text-sm font-medium text-gray-500">Experience</dt>
                    <dd class="mt-2">
                        <span
                            class="inline-flex items-center rounded-full bg-indigo-50 px-2.5 py-0.5 text-xs font-medium text-indigo-700">
                            {{ ucfirst($pilot->experience) }}
                        </span>
                    </dd>
                </div>
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Bio</dt>
                    <dd class="mt-1 whitespace-pre-line text-gray-900">{{ $pilot->bio ?: '—' }}</dd>
                </div>
            </dl>
        </div>
    </div>
</div>
@endsection