<?php

namespace App\models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = "sr_users";
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Logout
     */
    public function AauthAcessToken(){
        return $this->hasMany('\App\models\OauthAccessToken');
    }

    /**
     * Create user
     */
    public function createUser($request)
    {
        try {
            
            $user = new Users;

            $user->name = $request->name;
            $user->password = bcrypt($request->password);
            $user->role = 2;
            $user->client = $request->client;
            $user->save();

            return [
                "ok" => true,
                "message" => "success",
                "code" => 200,
            ];

        } catch (Exception $e) {
            return [
                "ok" => false,
                "message" => "error: " . $e,
                "code" => 400,
            ];
        }

    }
}
