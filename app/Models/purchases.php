<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{
    use HasFactory;
    protected $table = 'purchases'; // Table name

    protected $primaryKey = 'purchase_id'; // Primary key

    public $timestamps = false; // Disable created_at and updated_at

    protected $fillable = [
        'purchase_id',
        'purchase_date',
        'purchase_category',
        'amount',
    ];
}
