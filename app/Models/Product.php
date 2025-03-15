<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product'; 
    protected $primaryKey = 'pdt_id'; 
    public $timestamps = false; 

    protected $fillable = [
        'pdt_name',
        'pdt_category',
        'brandname',
        'baseprice',
        'salesrate',
        'tax_id',
        'unitname'
    ];
}
