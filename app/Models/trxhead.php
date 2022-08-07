<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trxhead extends Model
{
    use HasFactory;
    protected $primarykey = 'trxNo';
    protected $fillable = ['StoreID', 'trxNo'];
}
