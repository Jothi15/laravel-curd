<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data1 extends Model
{
    use HasFactory;
    protected $table ='data1s';
    
    // protected $fillable = [
    //     'name',
    //     'address',
        
         
    // ];

    public function student1(){
        
            return $this->belongsTo(student1::class);
    }
     
}
