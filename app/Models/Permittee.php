<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permittee extends Model
{
    use HasFactory;
    protected $table = 'permittee';
    protected $fillable = [
        'responsible_person',
        'date_apprehend',
        'time_apprehend',
        'remark',
        'violation_permit_id',
        'permit_holder',
        'area_location',
    ];
}
