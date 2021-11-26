<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    // A author could technically have multiple publisher. Different books could have different publishers
    public function publisher()
    {
        return $this->hasOne(Publisher::class);
    }
}
