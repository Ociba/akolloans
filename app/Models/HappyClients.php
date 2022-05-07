<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HappyClients extends Model
{
    use HasFactory;
    protected $fillable=['user_id','clients_name','clients_say','clients_photo'];
}
