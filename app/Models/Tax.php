<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;
    protected $table = 'tax'; 
    protected $primaryKey = 'tax_id'; 
    public $timestamps = false; 

    protected $fillable = [
        'tax_id',
        'rate'
    ];

}
