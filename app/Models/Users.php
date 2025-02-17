<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id'; // Set the primary key to user_id

    protected $fillable = [
        'username',
        'password',
        'citizen_id',
        'prefix',
        'firstname',
        'lastname',
        'major_id'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'users_id', 'role_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
}

