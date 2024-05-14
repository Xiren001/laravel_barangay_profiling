<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resident extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'firstname',
        'middlename',
        'lastname',
        'address',
        'suffix',
        'job_status',
        'block',
        'street',
        'subd_purok',
        'birthplace',
        'birthday',
        'age',
        'gender',
        'civil_status',
        'citizenship',
        'email',
        'religion',
        'blood_type',
        'voters_id',
        'presinct_no',
        'contact_number',
        'household_id',
        'occupation',
        'disabilities',
        'emergency_contacts',
        'image'
    ];
}
