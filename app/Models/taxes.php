<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taxes extends Model
{
    use HasFactory;
    protected $table = 'taxes'; // Table name

    protected $primaryKey = 'tax_id'; // Primary key

    public $timestamps = false; // Disable created_at and updated_at

    protected $fillable = [
        'tax_id',
        'rate',
    ];
}
