<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loanpayment extends Model
{
    use HasFactory;
    protected $fillable=['paid_by','amount'];
}
