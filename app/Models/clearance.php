<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking',
        'name',
        'address',
        'age',
        'number',
        'date',
        'upload_file',
        'upload_file_sig',
        'payment',
        'ref',
        'bio',
        'status'
    ];
}
