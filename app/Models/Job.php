<?php

namespace App\Models;
use Illuminate\Support\Arr;

class job {

    public static function all(): array 
    
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$100,000 - $130,000'
            ],
            [
                'id' => 2,
                'title' => 'Frontend Developer',
                'salary' => '$80,000 - $110,000'
            ],
            [
                'id' => 3,
                'title' => 'Backend Developer',
                'salary' => '$90,000 - $120,000'
            ]
        ];
    }

    public static function find(int $id): ? array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) {
            abort (404);
        }
        return $job;
    }
    
}
