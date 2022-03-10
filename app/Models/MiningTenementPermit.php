<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiningTenementPermit extends Model
{
    use HasFactory;
    protected $table = 'mining_tenement_permit';
    protected $fillable = [
        'description',
        'denominated',
        'granted',
        'expired',
        'sitio',
        'barangay',
        'municipality',
        'province',
    ];

}
