<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbstore extends Model
{
    use HasFactory;
    // protected $primaryKey = 'UserID';
}

class qrstore extends Model
{
    use HasFactory;
    protected $primaryKey = 'QrCode';
}
