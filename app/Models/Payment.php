<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'cusId',
        'name',
        'email',
        'phonenumber',
        'interest',
        'installment',
        'amount'
];
public function Customer(){
    return $this->belongsTo(Customer::class,'cusId','id');
}
}
