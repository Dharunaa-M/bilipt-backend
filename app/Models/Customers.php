<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'Customers'; // Table name
    protected $primaryKey = 'customer_id'; // Primary key
    public $timestamps = false; // Disable timestamps if not needed

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address'
    ];
}
