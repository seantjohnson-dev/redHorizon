@extends('layouts.app')
@section('title', 'New Pilot')
@section('content')
{{-- <div class="mb-6">
    <h1 class="text-2xl font-semibold text-gray-900">Create Pilot</h1>
    <p class="mt-1 text-sm text-gray-600">Add a new pilot to your roster.</p>
</div> --}}
<section class="hero">
    <div class="wrap hero__content">
        <h2>Help Us Chart the Future</h2>
        <p>
            <?php echo $companyName; ?> is looking for experienced pilots to lead humanity’s
            next great adventure: guided tours across the Martian skies.
            If you’ve logged hours commanding spacecraft simulators, orbital craft, or
            terrestrial jets, we want you at the helm of our missions.
        </p>
    </div>
</section>
<section class="wrap">
    <form id="pilot-form" action="{{ route('pilots.store') }}" method="POST"
        class="rounded-lg bg-brand-card p-6 shadow-sm ring-1 ring-gray-200 my-5">
        @include('pilots._form', ['submitLabel' => 'Apply Now'])
    </form>
</section>
@endsection