<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_histories extends Model
{
    use HasFactory;
    protected $table = 'payment_histories'; // Table name

    protected $primaryKey = 'billno'; // Primary key

    public $timestamps = false; // Disable created_at and updated_at

    protected $fillable = [
        'billno',
        'customer_id',
        'balance',
    ];

}
