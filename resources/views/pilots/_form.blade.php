@php($experiences = ['beginner','intermediate','advanced','expert'])

@csrf
@if(isset($method) && in_array($method, ['PUT','PATCH']))
@method($method)
@endif

<div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
    <div class="sm:col-span-6">
        <label for="firstName" class="block text-sm font-medium text-gray-300">First Name</label>
        <input name="firstName" id="firstName" type="text" value="{{ old('firstName', $pilot->firstName ?? '') }}"
            class="mt-1 px-1 py-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        @error('firstName')<p class="error-msg mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="sm:col-span-6">
        <label for="lastName" class="block text-sm font-medium text-gray-300">Last Name</label>
        <input name="lastName" id="lastName" type="text" value="{{ old('lastName', $pilot->lastName ?? '') }}"
            class="mt-1 px-1 py-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        @error('lastName')<p class="error-msg mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="sm:col-span-6">
        <label for="age" class="block text-sm font-medium text-gray-300">Age</label>
        <input name="age" id="age" type="number" min="18" value="{{ old('age', $pilot->age ?? '') }}"
            class="mt-1 px-1 py-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        @error('age')<p class="error-msg mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="sm:col-span-6">
        <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
        <input name="email" id="email" type="email" value="{{ old('email', $pilot->email ?? '') }}"
            class="mt-1 px-1 py-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        @error('email')<p class="error-msg mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="sm:col-span-6">
        <label for="experience" class="block text-sm font-medium text-gray-300">Experience</label>
        <select name="experience" id="experience"
            class="mt-1 px-1 py-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            <option value="" disabled {{ old('experience', $pilot->experience ?? '')==='' ? 'selected' : '' }}>Select…
            </option>
            @foreach($experiences as $lvl)
            <option value="{{ $lvl }}" @selected(old('experience', $pilot->experience ?? '') === $lvl)>{{ ucfirst($lvl)
                }}</option>
            @endforeach
        </select>
        @error('experience')<p class="error-msg mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>

    <div class="sm:col-span-6">
        <label for="bio" class="block text-sm font-medium text-gray-300">Bio</label>
        <textarea name="bio" id="bio" rows="5"
            class="mt-1 px-1 py-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('bio', $pilot->bio ?? '') }}</textarea>
        @error('bio')<p class="error-msg mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
    </div>
</div>

<div class="mt-8 flex items-center gap-3">
    <button type="submit"
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
        {{ $submitLabel ?? 'Save' }}
    </button>
    <a href="{{ route('pilots.index') }}" class="text-sm font-medium text-gray-300 hover:text-gray-900">Cancel</a>
</div>