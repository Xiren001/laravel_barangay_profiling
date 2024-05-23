<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blotter extends Model
{
    use HasFactory;

    protected $fillable = [
        'complainant',
        'respondent',
        'victim',
        'incident',
        'incident_date',
        'status'
    ];
}
