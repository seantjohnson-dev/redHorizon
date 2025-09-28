@extends('layouts.app')
@section('title', 'Pilots')
@section('content')
<div class="flex items-center justify-between">
    <h1 class="text-2xl font-semibold text-gray-900">Pilots</h1>
    <a href="{{ route('pilots.create') }}"
        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
        + New Pilot
    </a>
</div>

<div class="mt-6 overflow-hidden rounded-lg border border-gray-200 bg-white">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Age</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">Experience
                </th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
            @forelse($pilots as $pilot)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4">
                    <a href="{{ route('pilots.show', $pilot) }}" class="font-medium text-gray-900 hover:underline">
                        {{ $pilot->firstName }} {{ $pilot->lastName }}
                    </a>
                </td>
                <td class="px-6 py-4 text-gray-700">{{ $pilot->email }}</td>
                <td class="px-6 py-4 text-gray-700">{{ $pilot->age }}</td>
                <td class="px-6 py-4">
                    <span
                        class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">
                        {{ ucfirst($pilot->experience) }}
                    </span>
                </td>
                <td class="px-6 py-4 text-right">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('pilots.edit', $pilot) }}"
                            class="rounded-md border border-gray-300 px-3 py-1.5 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Edit
                        </a>
                        <form action="{{ route('pilots.destroy', $pilot) }}" method="POST"
                            onsubmit="return confirm('Delete this pilot?')">
                            @csrf @method('DELETE')
                            <button type="submit"
                                class="rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold text-white hover:bg-red-500">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-8 text-center text-sm text-gray-500">No pilots yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $pilots->links() }}
</div>
@endsection