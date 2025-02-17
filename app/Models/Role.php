<?php

// app/Models/Role.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey = 'roles_id';

    protected $fillable = ['role_name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles', 'role_id', 'users_id');
    }
}

