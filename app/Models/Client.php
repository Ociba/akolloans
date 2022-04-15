<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillabe =['user_id','package_id','phone_number','nin_number','tin_number','computer_no','date_of_birth',
                        'employment_status','employer','loan_amount','loan_due_date','loan_status','district_id'];
}
