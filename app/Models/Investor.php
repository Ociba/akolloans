<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;
    protected $fillable =['bought_by','district_id','package_id','amount_deposited','period','state','contact','investor_status'];
}
