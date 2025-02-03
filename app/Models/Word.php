<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    protected $fillable = ['abcedary'];

    public function getAbecedaryLetter($value)
    {
        $position = $value % 23;
        return $this->abcedary[$position];
    }
}
