<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use DB;
use Auth;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'category_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    /**
     * This function counts the investors
     */
    public function countInvestors(){
        return DB::table('investors')->count();
    }
    /**
     * This function counts number of available packages
     */
    public function countPackages(){
        return DB::table('packages')->count();
    }
      /**
     * This function counts number of clients with Loans
     */
    public function countLoanClients(){
        return DB::table('clients')->count();
    }
     /**
     * get profile picture
     */
    public function getLoggedInUserLogo(){
        $user_logo = User::where('id', '=', $this->id)->value('profile_photo_path');;
        if(empty($user_logo)){
            $user_logo = 'ociba.jpeg';
        }
        return $user_logo;
    }
    public function getUserPermisions(){
        $empty_permissions_array = [];
        $permissions_array = DB::table('staff_permissions')
        ->join('permissions','permissions.id','staff_permissions.permission_id')
        ->where('staff_id',Auth::user()->id)
        ->select('permissions.permission')->get();
        foreach(json_decode($permissions_array,true) as $permissions){
                array_push($empty_permissions_array,$permissions["permission"]);
        }
        return $empty_permissions_array;
    }
}
