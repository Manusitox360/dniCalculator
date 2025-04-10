<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Word;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            'T',
            'R',
            'W',
            'A',
            'G',
            'M',
            'Y',
            'F',
            'P',
            'D',
            'X',
            'B',
            'N',
            'J',
            'Z',
            'S',
            'Q',
            'V',
            'H',
            'L',
            'C',
            'K',
            'E'
        ];

        foreach ($words as $index => $word) {
            Word::create([
                'abcedary' => $word,
                'module' => $index + 1
            ]);
        }
    }
}
