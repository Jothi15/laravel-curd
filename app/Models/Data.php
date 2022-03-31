<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'data';
    protected $dates =['deleted_at'];
    protected $fillable = [
        'id',
        'name',
        'address',
        'image',
         
    ];

    public function Data(){
            return $this->belongsTo(Data::class);
    }
     
   
}
