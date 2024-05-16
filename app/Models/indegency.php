<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indegency extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking',
        'name',
        'address',
        'dateb',
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
