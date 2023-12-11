<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function averageRating()    {
            return $this->ratings()->avg('rating');
        }
            
    public function votersCount()   {
            return $this->ratings()->count();
        }
}
