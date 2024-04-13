<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable

{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'picture',
        'mobile',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function checkUser($user, $loginType = 'google')
    {


        if ($loginType === 'mobile') {
            $data = [
                'mobile' =>$user,
            ];
        } else if ($loginType === 'google') {
            $data = [
                'email' => $user['email'],
                'picture' => $user['picture'],
                'name' => $user['name'],
            ];

        }

        $check = User::query()->where($data)->first();

        if (!$check) {
            $newUser = User::query()->create($data);

            Auth::login($newUser, true);
            //  Notification::send(Auth::user(), new WelcomeMessage($user['name']));
        } else {
            Auth::login($check, true);
            // Notification::send(Auth::user(), new WelcomeMessage($user['name']));

        }

        return redirect()->route('client.home');

    }

    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Order::class);

    }


}
