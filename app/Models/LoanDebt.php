<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDebt extends Model
{
    use HasFactory;
    protected $fillable=['borrowed_by','debt'];
}
