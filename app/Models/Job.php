<?php

namespace App\Models;

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
}