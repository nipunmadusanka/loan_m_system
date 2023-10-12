<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdatas extends Model
{
    protected $table = 'userdatas';
    protected $primaryKey = 'id';
    protected $fillable = ['phoneNumber', 'address'];
}
