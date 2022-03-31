<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected  $fillable = ["title","status","decription","address_id"];

    public function address()
    {
        return $this->belongsTo(Address::class); // Forigen taken
    }
}
