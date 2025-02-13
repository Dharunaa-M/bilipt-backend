<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $table = 'Bills'; // Table name
    protected $primaryKey = 'billno'; // Primary key
    public $timestamps = false; // Disable timestamps if not needed

    protected $fillable = [
        'customer_id',
        'amount',
        'total',
        'pay_terms',
        'date',
        'status'
    ];
}
