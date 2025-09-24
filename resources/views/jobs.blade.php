<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <h1>
    Job Listings
    <ul>
    @foreach ($jobs as $job)

    <li>
        <a href="/jobs/{{ $job['id'] }}" class = "text-blue-500 hover:underline">
            <strong> {{ $job['title'] }} : </strong> Pays {{ $job['salary'] }} Per Year 
        </a>
        </li>

        
    @endforeach
    </ul>
    </h1>
    </x-layout>