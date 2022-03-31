<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student1 extends Model
{
    use HasFactory;
    protected $table ='student1s';
   // protected $fillable = ['name','class'];

 
public function data1()
{
    return $this->hasOne(data1::class);
}
}
