<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeofTransportation extends Model
{
    use HasFactory;
    protected $table = 'mode_of_transportation';
    protected $fillable = [
        'description'
    ];
}
