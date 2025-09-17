<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <h1>
    Job Listings
    @foreach ($jobs as $job)

    <li><strong> {{ $job['title'] }} : </strong> Pays {{ $job['salary'] }} Per Year </li>
        
    @endforeach
    </h1>
    </x-layout>