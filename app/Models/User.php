<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\UserRole;
use Carbon\Carbon;
class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'kvk',
        'vat',
        'phone',
        'address',
        'bio',
        'avater',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'email_verified_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Userrole()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id');
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function role() {
        return $this->belongsTo(Role::class, 'user_roles', 'user_id', 'role_id');
    }

    public static function UserCount()
    {
        $date = Carbon::now()->subDays(30);
        $get_user = User::where('created_at', '>=', $date)->count();

        return $get_user;
    }
}
