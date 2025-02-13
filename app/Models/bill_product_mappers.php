<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_product_mappers extends Model
{
    use HasFactory;
    protected $table = 'bill_product_mappers'; // Table name

    protected $primaryKey = 'id'; // Primary key

    public $timestamps = false; // Disable created_at and updated_at

    protected $fillable = [
        'billno',
        'pdt_id',
        'qty',
    ];
}
