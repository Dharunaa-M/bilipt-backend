<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products'; // Table name
    protected $primaryKey = 'pdt_id';
    public $timestamps = false; // Disable created_at and updated_at

    protected $fillable = [
        'pdt_name',
        'pdt_category',
        'brandname',
        'baseprice',
        'salesrate',
        'unitname',
        'tax_id',
    ];
}
