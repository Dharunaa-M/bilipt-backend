<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer'; 
    protected $primaryKey = 'customer_id'; 
    public $timestamps = false; 

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
    ];
}
