<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    <h1>Job Listings</h1>

    <div class="space-y">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job->id }}" class="block px-4 py-6 border-grey-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job->title }}:</strong> Pays {{ $job->salary }} Per Year
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
